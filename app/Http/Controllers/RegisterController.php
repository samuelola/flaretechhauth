<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\RegisterRequest;
use App\Repositories\AuthRepository;
use App\Services\AuthService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use App\Enum\UserStatus;
use Mews\Purifier\Facades\Purifier;
use App\Models\UserWallet;
use Illuminate\Support\Str;
use App\Models\UserStatistics;
use App\Models\Tenant;
use App\Enum\ReferralCoin;
use App\Enum\AccountCreationCoin;
use App\Models\CryptoWallet;


class RegisterController extends Controller
{
    public function showRegisterForm(Request $request)
    {  
        $referralCode = $request->query('ref');
        $all_countries = DB::table('countries')->get();
        $languages = DB::table('languages')->get();
        return view('register',compact('all_countries','languages','referralCode'));
    }

    public function allState(Request $request)
    {
        $country_id = $request->country_id;
        $all_states = DB::table('states')->where('country_code',$country_id)->get();
        return response([
            'success' => true,
            'data' => $all_states,
        ]);
        
    }

    public function saveRegister(RegisterRequest $request , AuthRepository $authRepository)
    {
        $data = $request->validated();
        //$cleanHtml = Purifier::clean($request->input('your_field_name'));
        $data['active'] = 'Yes';
        $data['deleted'] = 'No';
        $data['albums'] = 0;
        $data['tracks'] = 0;
        $data['role_id'] = UserStatus::Guest;
        $referral_code = $request->referral_code ?? 'NULL';
        $register = $authRepository->fromData($data);
        $regService = (new AuthService())->storeReg($register);
        $credentials = ['email'=>$regService->email,'password'=>$data['password']];
        $loginService = (new AuthService())->loginUser($credentials);
        $res = json_decode($loginService);
        if($res->token){
            $hash = Crypt::encryptString($res->token);
            if($res->user->role_id == UserStatus::Guest){
                // check for wallet
                $exist_user = DB::table('users')->where('id',$res->user->id)->first();
                if($exist_user){
                  
                  (new AuthService())->storeTenant($request->first_name,$res->user->id);
                  (new AuthService())->addWallet($res->user->id);
                  (new AuthService())->addCryptoWallet($res->user->id);

                  $link = 'FLARETECH'.strtoupper(Str::random(9));
                      if (!empty($referral_code)) {
                          $referrer = UserStatistics::with('user')->where('referral_code', $referral_code)->first();
                          if(is_null($referrer?->invite_points)){
                             DB::table('user_statistics')->where('referral_code', $referral_code)
                                                         ->update(['invite_points'=>ReferralCoin::RefCoin]);
                          }else{
                             DB::table('user_statistics')->where('referral_code', $referral_code)->increment('invite_points',ReferralCoin::RefCoin);
                          }
                          
                          $ref = new UserStatistics ();
                          $ref->referral_code = $link;
                          $ref->referred_by = $referrer?->user_id;
                          $ref->user_id = $res->user->id;
                          $ref->save();
                      }else{
                          $ref = new UserStatistics ();
                          $ref->referral_code = $link;
                          $ref->user_id = $res->user->id;
                          $ref->save();
                      }
                      
                  // Account Creation
                 
                  $check_stats = DB::table('user_statistics')->where('user_id',$res->user->id)->first();
                  if(is_null($check_stats->account_creation)){
                        DB::table('user_statistics')
                            ->where('user_id', $res->user->id)
                            ->update(['account_creation'=>AccountCreationCoin::NewAccountCoin]);
                   }else{
                        DB::table('user_statistics')
                            ->where('user_id', $res->user->id)
                            ->increment('account_creation',AccountCreationCoin::NewAccountCoin);
                    }
                  
                  

                }   
                $baseUrl = config('app.artistuser_link');
                return redirect()->to("{$baseUrl}/dashboardd?pt=$hash&message=true");
            }
           
            
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Services\AuthService;
use Illuminate\Support\Facades\Http;
use Session;
use Illuminate\Support\Facades\Crypt;
use DB;
use App\Enum\UserStatus;
use Illuminate\Support\Str;
use App\Models\UserWallet;
use App\Models\UserStatistics;
use Carbon\Carbon;
use App\Enum\AccountCreationCoin;
use App\Models\CryptoWallet;


class LoginController extends Controller
{
    public function showloginForm()
    {
        if (Session::has('error')){
            Alert::error('Error', Session::get('error'));
        }elseif(Session::has('logout')){
            Alert::success('Success', Session::get('logout'));
        }
        return view('login');
    }

    public function loginn(LoginRequest $request)
    {
        

        $credentials = $request->validated();
        // Check if remember checkbox is checked
        $remember = $request->has('remember');
        $loginService = (new AuthService())->loginUser($credentials);
        if($loginService == false){
            $url = config('app.url');
            return redirect()->to("{$url}")->with('error','Wrong Email or Password');
        }
        $res = json_decode($loginService);
        
        if($res->token){
            $hash = Crypt::encryptString($res->token);
            if($res->user->role_id == UserStatus::SuperAdmin || $res->user->role_id == UserStatus::Admin){
             
              // check for wallet
                $exist_user = DB::table('users')->where('id',$res->user->id)->first();
                if($exist_user){

                  (new AuthService())->addWallet($res->user->id);
                  (new AuthService())->addCryptoWallet($res->user->id);

                }   

            $baseUrll = config('app.superadmin_link');
            return redirect()->to("{$baseUrll}/dashboardd?pt=$hash&message=true");
            

            }
            elseif($res->user->role_id == UserStatus::Artist || $res->user->role_id == UserStatus::Guest){

                $response = Http::withHeaders([
                    'X-APP-A-KEY' => env('APP_A_API_KEY'),
                ])->post(config('app.frontwebsite_link').'/api/get_the', [
                    'token_path' => $hash,
                ]);

                // dd($response->body());

                $dateAfter = DB::table('sub_count')
                                 ->where('user_id',$res->user->id)
                                 ->orderBy('id','desc')
                                 ->first();
                if(!is_null($dateAfter)){
                    $d_date = Carbon::parse($dateAfter->expires_at)->format("Y-m-d");
                    if(now()->toDateString() == $d_date){
                        DB::table('users')->where('id',$res->user->id)->update([
                            'role_id'=> UserStatus::Guest
                        ]);

                        DB::table('sub_count')
                            ->where('user_id',$res->user->id)
                            ->orderBy('id','desc') 
                            ->update([
                                'status'=> 'notactive'
                            ]);
                    }else{
                        
                    }
                }
                
                // check for wallet
                $exist_user = DB::table('users')->where('id',$res->user->id)->first();
                if($exist_user){

                  (new AuthService())->addWallet($res->user->id);
                  (new AuthService())->addCryptoWallet($res->user->id);

                  // Account Creation
                 
                  $check_stats = DB::table('user_statistics')->where('user_id',$res->user->id)->first();
                  if(is_null($check_stats->account_creation)){
                        DB::table('user_statistics')
                            ->where('user_id', $res->user->id)
                            ->update(['account_creation'=>AccountCreationCoin::NewAccountCoin]);
                  }else{
                        // DB::table('user_statistics')
                        //     ->where('user_id', $res->user->id)
                        //     ->increment('account_creation',AccountCreationCoin::NewAccountCoin);
                  }

                }
                
                  $exist_user_count = DB::table('user_statistics')->where('user_id',$res->user->id)->first();
                //  $today = Carbon::today();
                //  if(is_null($exist_user_count)){
                //     $r = new UserStatistics ();
                //     $r->user_id = $res->user->id;
                //     $r->login_count = 5;
                //     $r->login_date = $today;
                //     $r->save();

                //  }else{
                //     if($exist_user_count->login_date == now()->toDateString()){
                   
                //     }else{

                //         $r = UserStatistics::where('user_id',$res->user->id)->first();
                //         $r->login_date = Carbon::today();
                //         $r->login_count += 5;
                //         $r->save();
                //     }
                    
                //  }  
                 
                 $link = 'FLARETECH'.strtoupper(Str::random(9));
                 if(is_null($exist_user_count->referral_code) || empty($exist_user_count->referral_code)){
                        UserStatistics::where('user_id',$res->user->id)
                                        ->update(['referral_code'=>$link]);
                 }
                 
                 $baseUrl = config('app.artistuser_link');
                 return redirect()->to("{$baseUrl}/dashboardd?pt=$hash&message=true");
            }
              
        }

        
       
    }
}

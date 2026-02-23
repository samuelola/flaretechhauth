<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\RegisterInterface;
use App\Interfaces\RegisterTenantInterface;
use DB;
use App\Models\UserWallet;
use Illuminate\Support\Str;
use App\Models\UserStatistics;
use App\Models\Tenant;
use App\Models\CryptoWallet;


class AuthService implements RegisterInterface,RegisterTenantInterface{

    public function storeReg($data){
        
        $rel = (array)$data;
        $user =  User::create($rel);
        return $user;
        
    }

    public function loginUser($logindata){
         
         $email = $logindata['email'];
         $password = $logindata['password'];
         //check user
         $user = User::where('email',$email)->first();
         if(!is_null($user)){
            if (Hash::check($password, $user->password)) {
                //pass to api 
                $baseUrl = config('app.artistuser_link');
                $response = Http::post($baseUrl.'/api/log', [
                    'email' => $email,
                    'password' => $password
                ]);    
                
                \Log::info("DEBBUGG: $response");
                return $response->body();
                
            }
         }
         else{
            return false;
         }
 
    }

    public function addWallet($user_id){
        
        if(!DB::table('user_wallet')->where('user_id',$user_id)->exists()){
            
            $currencies = DB::table('currency')
            ->where('status', 1)
            ->get();

           $userwallets = $currencies->map(function ($currency) use ($user_id){
                 
                 return [
                        'uuid'=>Str::uuid(),
                        'user_id' => $user_id,
                        'currency_code' => $currency->code,
                        'balance' => 0,
                        'status' => 1,
                        'defaultt' => 0,
                        'currency_id' => $currency->id,
                        'created_at' => now(),
                        'updated_at' => now()
                 ];
           })->toArray();

           UserWallet::insert($userwallets);
           return true;
        }

        
    }

    public function addCryptoWallet($user_id){
        
        if (!DB::table('crypto_wallets')->where('user_id', $user_id)->exists()) {

            $cryptocurrencies = DB::table('cryptocurrencies')
            ->where('status', 1)
            ->get();

            $wallets = $cryptocurrencies->map(function ($currency) use ($user_id) {
                return [
                    'user_id'     => $user_id,
                    'coin'        => $currency->symbol,
                    'balance'     => 0,
                    'status'      => 1,
                    'currency_id' => $currency->id,
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ];
            })->toArray();

            CryptoWallet::insert($wallets);
            return true;
        }

        
    }

    public function storeTenant($name,$user_id){

         $tenant = Tenant::create(['name'=>$name. 'Team']);
         $tenant->users()->attach($user_id);  
         $userr = DB::table('users')
         ->where('id',$user_id)
         ->update(['current_tenant_id'=>$tenant->id]);
         return true;
    }
}
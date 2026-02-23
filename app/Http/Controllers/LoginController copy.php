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


class LoginController extends Controller
{
    public function showloginForm()
    {
        Alert::success('Success', 'Logout is successful');
        return view('login');
    }

    public function loginn(LoginRequest $request)
    {
        $credentials = $request->validated();
        $loginService = (new AuthService())->loginUser($credentials);
        $res = json_decode($loginService);
        if($res->token){
            $new_token = $res->token;
            setcookie("_ken", $new_token);
            $response = Http::withToken($new_token)->get('http://superadmin.test/api/user');
            
            dd($response->body());
            if($response->successful() == true){
                // return Redirect::to('http://superadmin.test/dashboard');
                // return redirect('http://superadmin.test/dashboard');
                // return redirect()->intended('http://superadmin.test/dashboard');
            }
            //  return Redirect::to('http://superadmin.test/dashboard');
        }else{
            return back()->with([
                'status' => 'Unauthorised, Wrong Email or Password',
            ]);
        }
        // if (Auth::attempt($credentials)) 
        // {
        //    Alert::success('Success', 'Success Message');
        //      Alert::toast('Welcome Back '.auth()->user()->name, 'success');
        //      return redirect()->route('dashboard'); 
        //     return Redirect::to('http://superadmin.test/dashboard');
        // }
        
        
        
    }
}

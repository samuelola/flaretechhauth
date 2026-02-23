<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordResetCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Mail\ResetCodeMail;

class ForgotPasswordController extends Controller
{
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    public function sendCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $code = rand(1000, 9999);

        PasswordResetCode::updateOrCreate(
            ['email' => $request->email],
            [
                'code' => $code,
                'expires_at' => Carbon::now()->addMinutes(10)
            ]
        );

        Mail::to($request->email)->queue(new ResetCodeMail($code));

        Session::put('reset_email', $request->email);

        return redirect()->route('verify.code')->with('success', 'Code sent to your email.');
    }

    public function showVerifyForm()
    {
        return view('auth.verify-code');
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|digits:4'
        ]);

        $record = PasswordResetCode::where('email', session('reset_email'))
                    ->where('code', $request->code)
                    ->first();

        if (!$record || $record->expires_at < now()) {
            return back()->withErrors(['code' => 'Invalid or expired code']);
        }

        return redirect()->route('reset.password');
    }

    public function showResetForm()
    {
        return view('auth.reset-password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::where('email', session('reset_email'))->first();

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        PasswordResetCode::where('email', session('reset_email'))->delete();
        Session::forget('reset_email');

        return redirect()->route('showlogin')->with('success', 'Password updated successfully.');
    }
}

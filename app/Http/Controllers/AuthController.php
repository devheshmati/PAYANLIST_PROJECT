<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Web Authentication
    // login
    public function login(Request $request)
    {
        $validator = $request->validate(
            [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
            ]
        );

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('user.dashboard');
        }

        return back()->withErrors($validator);
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    // register
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(), [
            'phone_number' => 'required|string|max:11|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => "required|string|min:8|max:255|confirmed"
            ]
        );

        if ($validator->fails()) {
            return redirect('/auth/register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create(
            [
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
            ]
        );

        session()->flash('redirect-after-register-message', 'true');

        event(new Registered($user));

        return view('auth.after-register-message');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    // forget password
    public function forgetPassword()
    {
    }
    public function showForgetPassword()
    {
        return view('auth.forget-password');
    }

    public function resetPassword()
    {
    }
    public function showResetPassword()
    {
        return view('auth.reset-password');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    // API Authentication
    public function apiLogin()
    {
    }
    public function apiRegister()
    {
    }
    public function apiForgetPassword()
    {
    }
    public function apiLogout()
    {
    }
}

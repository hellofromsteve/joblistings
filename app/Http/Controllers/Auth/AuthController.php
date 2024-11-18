<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function generateUniqueAccountNumber(): int
    {

        do {

            $accountNumber = mt_rand(10000000, 99999999);
        } while (User::where('user_account', $accountNumber)->exists());

        return $accountNumber;
    }

    public function register(Request $request)
    {

        $validated =  $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'phone' => 'required|digits:3',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);

        $accountNumber = $this->generateUniqueAccountNumber();



        $user = User::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password']),
            'user_account' => $accountNumber,
        ]);

        event(new Registered($user));

        Auth::login($user);
        $request->session()->regenerate();
        if (Auth::user()->account_type = 'employer') {
            return redirect()->route('employer.dashboard');
        }


        return redirect()->route('candidate.dashboard');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            if (Auth::user()->account_type === 'employer') {
                return redirect()->route('employer.dashboard');
            } else {

                return redirect()->route('candidate.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

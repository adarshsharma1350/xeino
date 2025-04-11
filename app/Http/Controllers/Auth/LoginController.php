<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'unique_id' => 'required|string|max:255',
            'password' => 'required|string|min:4',
        ]);

        $user = User::where('username', $request->unique_id)
                ->orWhere('email', $request->unique_id)
                ->first();

        if (!$user) {
            return redirect()->back()->withErrors(['unique_id' => 'Invalid username or email.']);
        }

        if (!password_verify($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid password.']);
        }

        Auth::login($user);
        return redirect()->route('user.dashboard', $user->username)->with('success', 'Login successful!');

    }

}

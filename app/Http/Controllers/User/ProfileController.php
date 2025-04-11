<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function profile(Request $request)
    {
        // Handle the profile update logic here
        // For example, you can validate the request and update the user's profile in the database

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    public function show()
    {



        $userId = Auth::user()->id; // ✅ Corrected to access the user's ID
        // $faqs = FAQ::where('status', 1)->where('user_id',$userId)->latest()->get();

        // return view('user.general.faqs',compact('faqs'));
        // $user = Auth::user();
        // Show the user's profile
        return view('user.profile.show',compact('userId'));
    }
    public function edit()
    {
        // Show the form to edit the user's profile
        return view('user.edit-profile');
    }
}

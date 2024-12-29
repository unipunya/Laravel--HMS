<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function show()
    {
        return view('profile'); // Name of the blade file
    }

    public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    $user = auth()->user();

    // Verify current password
    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'The current password is incorrect']);
    }

    // Update the password
    $user->update([
        'password' => Hash::make($request->new_password),
    ]);

    return back()->with('success', 'Password updated successfully!');
}


public function deleteProfile(Request $request)
{
    $user = auth()->user();

    // Delete the user profile from the database
    $user->delete();

    // Log the user out after deleting the profile
    auth()->logout();

    // Redirect to the homepage or login page
    return redirect()->route('login')->with('success', 'Your profile has been deleted successfully.');
}
}

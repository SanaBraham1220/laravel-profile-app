<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::paginate(8);
        return View('profile.index', compact('profiles'));
    }

    public function show(Profile $profile)
    {
        return View('profile.show', compact('profile'));
    }

    public function create()
    {
        return View('profile.create');
    }
    public function store(Request $request)
    {
        $FORM_FIELDS = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles',
            'password' => 'required|min:6|confirmed',
            'bio' => 'nullable'
        ]);

        $FORM_FIELDS['password'] = Hash::make($FORM_FIELDS['password']);

        Profile::create($FORM_FIELDS);

        // Redirect to profile list with success message flashbag
        return redirect()->route('profiles.index')->with('success', 'Profile has been created successfully.');
    }
}

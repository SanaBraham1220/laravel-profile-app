<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;

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
    public function store(ProfileRequest $request)
    {
        $FORM_FIELDS = $request->validated();

        $FORM_FIELDS['password'] = Hash::make($request['password']);

        Profile::create($FORM_FIELDS);

        // Redirect to profile list with success message flashbag
        return redirect()->route('profiles.index')->with('success', 'Profile has been created successfully.');
    }
}
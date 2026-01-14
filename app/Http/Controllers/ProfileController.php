<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::paginate(8);
        return View('profile.index', compact('profiles'));
    }

    public function show( Request $request)
    {
        $id = (int)$request->id;
 
        $profile =  Profile::findOrFail($id);

        return View('profile.show', compact('profile'));
    }


    public function create()
    {
      
        return View('profile.create');
    }
    public function store(Request $request)
    {
        /*
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');
        $bio = $request->input('bio');
        Profile::create([
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'bio' => $bio
        ]);
        */
        Profile::create($request->post());
        // Redirect to profile list with success message flashbag
        return redirect()->route('profiles.index')->with('success','Profile has been created successfully.');
    }
}
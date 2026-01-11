<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'John', 'lastname' => 'Doe', 'job-title' => 'Developer'],
            ['name' => 'Jane', 'lastname' => 'Smith', 'job-title' => 'Designer'],
            ['name' => 'Alice', 'lastname' => 'Krish', 'job-title' => 'Consultant'],
            ['name' => 'Jane', 'lastname' => 'Bean', 'job-title' => 'Cloud Engineer'],
            ['name' => 'Alice', 'lastname' => 'Johnson', 'job-title' => 'Data Scientist'],
        ];

        return view('home', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestLayoutController extends Controller
{
    function index()
    {
        return view('layouts');
    }
}
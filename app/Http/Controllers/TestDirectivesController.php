<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class TestDirectivesController extends Controller
{
    public function index()
    {
        $name = 'Sana';
        $lastname = 'Braham';
        $skills = ['PHP', 'JavaScript', 'Python', 'Java'];
        $languages = ['English', 'French', 'Spanish'];
        $children = 3;
        $jobstartdate = Carbon::parse('2023-01-10');
        $jobenddate = Carbon::parse('2024-03-20');
        $books = ['The Great Gatsby', '1984', 'To Kill a Mockingbird'];
        $color = 'blue';
        $age = 0;

        return view('directives', compact('name', 'lastname', 'skills', 'languages', 'children', 'jobstartdate', 'jobenddate', 'books', 'color', 'age'));
    }
}

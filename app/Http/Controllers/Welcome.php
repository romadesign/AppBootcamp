<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class Welcome extends Controller
{
    public function index()
    {
        $courses =  Course::all();
		return view('welcome', compact('courses'));
    }
}

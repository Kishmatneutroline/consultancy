<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        // dd($courses);
        return view('index', [
            'courses' => $courses
        ]);
    }
}

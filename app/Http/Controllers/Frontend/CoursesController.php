<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        return view('frontend.course.index');
    }
}

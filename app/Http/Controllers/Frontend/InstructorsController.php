<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class InstructorsController extends Controller
{
    public function index()
    {
        return view('frontend.instructor.index');
    }
}

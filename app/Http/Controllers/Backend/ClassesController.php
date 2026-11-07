<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ClassesController extends Controller
{
    public function index(): View
    {
        return view('backend.classes.index');
    }
}


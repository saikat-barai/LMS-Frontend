<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function login()
    {
        return view('frontend.student.login');
    }

    public function register()
    {
        return view('frontend.student.register');
    }

    public function dashboard()
    {
        return view('frontend.student.dashboard');
    }

    public function courses()
    {
        return view('frontend.student.courses');
    }

    public function exams()
    {
        return view('frontend.student.exams');
    }

    public function resources()
    {
        return view('frontend.student.resources');
    }

    public function orders()
    {
        return view('frontend.student.orders');
    }

    public function orderDetails()
    {
        return view('frontend.student.order-details');
    }

    public function notifications()
    {
        return view('frontend.student.notifications');
    }

    public function profile()
    {
        return view('frontend.student.profile');
    }

    public function classroom()
    {
        return view('frontend.student.classroom');
    }

    public function examRoom()
    {
        return view('frontend.student.exam-room');
    }
}

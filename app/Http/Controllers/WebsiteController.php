<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function courses()
    {
        return view('website.courses');
    }
    public function coursesBeginner()
    {
        return view('website.courses-beginner');
    }
    public function coursesIntermediate()
    {
        return view('website.courses-intermediate');
    }
    public function coursesAdvanced()
    {
        return view('website.courses-advanced');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function about()
    {
        return view('website.about');
    }
    public function gallery()
    {
        return view('website.gallery');
    }
    public function showStudentRegistrationForm()
    {
        return view('website.student.register');
    }
    public function showRegistrationPaymentPage()
    {
        return view('website.student.registration-payment');
    }
}

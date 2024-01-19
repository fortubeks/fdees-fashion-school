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
    public function contact()
    {
        return view('website.contact');
    }
    public function about()
    {
        return view('website.about');
    }
    public function admissions()
    {
        return view('website.admissions');
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

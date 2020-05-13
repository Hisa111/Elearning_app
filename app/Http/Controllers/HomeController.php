<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dash()
    {
        return view('dashboard');
    }
    public function categories()
    {
        return view('lesson.categories');
    }
    public function profile()
    {
        return view('layouts.profile');
    }
    public function answers()
    {
        return view('lesson.answers');
    }
    public function result()
    {
        return view('lesson.result');
    }
}

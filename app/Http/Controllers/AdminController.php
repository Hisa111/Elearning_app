<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function categories()
    {
        return view('admin.categories');
    }
    
    public function answers()
    {
        return view('admin.answer');
    }
}

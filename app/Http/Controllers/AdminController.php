<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function makecategories()
    {
        return view('admin.makecategories');
    }
    
    public function makeanswers()
    {
        return view('admin.makeanswer');
    }

    public function categories()
    {
        return view('admin.categories');
    }
}

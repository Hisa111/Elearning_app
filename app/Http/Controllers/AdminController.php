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

    public function makevalue()
    {
        return view('admin.makevalue');
    }
    
    public function categories()
    {
        return view('admin.categorieslist');
    }

    public function editcategories()
    {
        return view('edit.editcategories');
    }

    public function editvalue()
    {
        return view('edit.editvalue');
    }
}

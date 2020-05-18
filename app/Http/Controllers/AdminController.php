<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Question;
use App\Choice;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function makecategories()
    {
        return view('admin.makecategories');
    }

    public function makevalue($id)
    {
        $limit = 4; //Change the choice number
        $category=Category::find($id);
        $question=Question::where('category_id', $id);
        return view('admin.makevalue', compact('category', 'question', 'limit'));
    }
    
    public function categories()
    {
        $categories=Category::all();

        return view('admin.categorieslist', compact('categories'));
    }

    public function valuelist($id)
    {
        $limit = 4;
        $category=Category::find($id);
        $questions=Question::where('category_id', $id)->get();
        return view('admin.valuelist', compact('category', 'questions', 'limit'));
    }

    public function editcategories($id)
    {
        $category=Category::find($id);
        
        return view('edit.editcategories', compact('category'));
    }

    public function editvalue($id, $sec, $num)
    {
        $limit = 4; //Change the choice number
        $category=Category::find($id);
        $question=Question::where('category_id', $id);
        return view('admin.makevalue', compact('category', 'question', 'limit'));
    }
}

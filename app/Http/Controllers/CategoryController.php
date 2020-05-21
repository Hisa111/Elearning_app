<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function post(Request $request)
    {
        $category=new Category;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categorieslist');
    }

    public function editpost(Request $request, $id)
    {
        $category=Category::find($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categorieslist');
    }
    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();

        return redirect()->route('admin.categorieslist');
    }
}

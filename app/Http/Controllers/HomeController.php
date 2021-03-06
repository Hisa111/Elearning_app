<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Category;
use App\Question;
use App\Lesson;
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
        $categories = Category::all();
        return view('lesson.categories', compact('categories'));
    }

    public function profile()
    {
        return view('layouts.profile');
    }

    public function answers($id, Request $request)
    {
        $lesson = Lesson::find($id);
        $questions = $lesson->category->questions()->paginate(1);
        $answers = $request->session()->get('answers');
        // dd($answers);

        // $limit = 4;
        // $question = Question::find($id);
        return view('lesson.answers', compact('questions','lesson'));
        
    }

    public function result($id)
    {
        $lesson = Lesson::find($id);
        $answers = Answer::where('lesson_id', $id)->get();
        $correct_answers = 0;

        foreach ($answers as $answer){
            if($answer->choice->is_correct == 2){
                $correct_answers += 1;
            }
        }
        return view('lesson.result', compact('lesson', 'answers', 'correct_answers'));
    }
}

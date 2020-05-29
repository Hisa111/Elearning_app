<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function createLesson($id, Request $request)
    {
        $lesson = Lesson::create([ 
            'user_id' => auth()->user()->id,
            'category_id' => $id,
            'completed' => 1
        ]);
        
        // foreach($lesson->category->questions as $question){
        //     $answers = new Answer;
        //     $answers->user_id = auth()->user()->id;
        //     $answers->choice_id = '';
        // }
        
        $answers = []; //reset inside of parameter
        $request->session()->put('answers', $answers);
        
        foreach($lesson->category->questions as $question) {
            $answers = $request->session()->get('answers');
            
            $ans = new Answer();
            $ans->user_id = auth()->user()->id;
            $ans->choice_id = 0;
            $ans->lesson_id = $lesson->id;

            // We add the new answer object to the array
            array_push($answers, $ans);

            // We update the array in the session
            $request->session()->put('answers', $answers);
        }
        // dd($answers);
        return redirect()->route('lesson.answers', ['id' => $lesson->id]);
    }
}

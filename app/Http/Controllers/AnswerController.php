<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Lesson;
use App\Activity;
use App\Choice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function post($id, $choice_id, Request $request)
    {
        // Get answers array from session, it will be empty for first page
        $answers = $request->session()->get('answers');

        $choice = Choice::find($choice_id);

        // We create an answer object, not yet saved in database.
        $answers[$request->page_num]->choice_id = $choice->id;

        // We update the array in the session
        $request->session()->put('answers', $answers);

        //if complete AddSettionFunction I'll replace code below to another place.
        //and add submit button

        // if ($request->next_page != "") {
        //     return redirect($request->next_page);
        // } else { //If it is last page
        //     foreach ($answers as $answer) {
        //         $answer->save();
        //     }

        //     $request->session()->forget('answers');
        //     return redirect()->route('lesson.result', ['id' => $id,]);
        // }
        return redirect()->back();
    }
    
    public function submit(Request $request, $id)
    {
        //insert data into database
        $answers = $request->session()->get('answers');

        foreach($answers as $answer)
        {
            $answer->save();
        }
        $request->session()->forget('answers');

        //re-write lesson complete
        $lesson = Lesson::find($id);
        $answers = Answer::where('lesson_id', $id)->get();
        $correct_answers = 0;

        foreach ($answers as $answer){
            if($answer->choice->is_correct == 2){
                $correct_answers += 1;
            }
        }
        if($correct_answers/$lesson->category->questions->count() < 0.7)
        {
            $lesson->completed = 2;
            $lesson->save();
            //create activity row
            $activity = new Activity;
            $activity->user_id = auth()->user()->id;
            $activity->lesson_id = $id;
        }
        
        return redirect()->route('lesson.result', ['id' => $id,]);
    }

    public function delete(Request $request)
    {
        $answers=$request->session()->get('answers');
        $answers[$request->page_num]->choice_id = 0;
        $request->session()->put('answers', $answers);

        return redirect()->back();
    }
}

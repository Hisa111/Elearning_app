<?php

namespace App\Http\Controllers;

use App\Choice;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function post(Request $request, $id, $num)
    {
        $question = new Question;
        $question->question_text = $request->word;
        $question->category_id = $id;
        $question->save();

        for($x = 1; $x <= $num; $x++ ) {
            $choice =new Choice;
            $choice->choice_text = $request->$x;
            $choice->question_id = $question->id;
            if($request->answer == $x) {
                $choice->is_correct = 2 ;
            }
            $choice->save();
        }

        return redirect()->route('admin.valuelist', ['id'=>$id]);
        
    }

    public function edit(Request $request, $id, $sec, $num)
    {
        $question = Question::where('id',  $$sec);  
        $question->question_text = $request->word;
        $question->save();

        for($x = 1; $x <= $num; $x++ ) {
            $choice = Choice::where('question_id ', $sec)->where('id', '<=', $x);
            $choice->choice_text = $request->$x;
            if($request->answer == $x) {
                $choice->is_correct = 2 ;
            }else{
                $choice->is_correct = 1;
            }
            $choice->save();
        }

        return redirect()->route('admin.valuelist', ['id'=>$id]);
        
    }
    public function delete($id, $sec)
    {
        $question = Question::where('id',  $sec);
        $question->delete();

        return redirect()->route('admin.valuelist', ['id'=>$id]);
        
    }
}

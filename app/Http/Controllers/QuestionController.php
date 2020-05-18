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

    public function editpost(Request $request, $id, $num)
    {
        $question = Question::find($id);
        $question->update([
            'question_text' => $request->word
        ]);

        for ($i=1; $i <= $num ; $i++) { 
            $choice = Choice::find($request["choice$i" . "_id"]);

            $choice->update([
                'choice_text' => $request["choice$i" . "_text"],
                'is_correct' => $request->answer == $i ? 2 : 1
            ]);
        }
        // $question = Question::find($id);  
        // $question->question_text = $request->word;
        // $question->save();

        // for($x = 1; $x <= $num; $x++ ) {
        //     $x -= 1;
        //     $choice = Choice::where('question_id ', $id)->get();
        //     dd($choice);
        //     $choice->choice_text = $request->$x;
        //     $x += 1;

        //     if($request->answer == $x) {
        //         $choice->is_correct = 2 ;
        //     }else{
        //         $choice->is_correct = 1;
        //     }
        //     $choice->save();
        // }

        return redirect()->route('admin.valuelist', ['id'=>$question->category_id]);
        
    }
    public function delete($id, $sec)
    {
        $question = Question::where('id',  $sec);
        $question->delete();

        return redirect()->route('admin.valuelist', ['id'=>$id]);
        
    }
}

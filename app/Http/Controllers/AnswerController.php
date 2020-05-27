<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function post($id, $choice_id, Request $request)
    {
        // Get answers array from session, it will be empty for first page
        $answers = $request->session()->get('answers');

        // We create an answer object, not yet saved in database.
        $answers[$request->page_num]->choice_id = $choice_id;

        // We update the array in the session
        $request->session()->put('answers', $answers);

        //if complete AddSettionFunction I'll replace code below to another place.
        //and add submit button
        if ($request->next_page != "") {
            return redirect($request->next_page);
        } else { //If it is last page
            foreach ($answers as $answer) {
                $answer->save();
            }

            $request->session()->forget('answers');
            return redirect()->route('lesson.result', ['id' => $id,]);
        }
    }
    public function submit()
    {
        //
    }

    public function delete(Request $request)
    {
        $answers=$request->session()->get('answers');
        $answers[$request->page_num]->choice_id = '';
        $request->session()->put('answers', $answers);

        return redirect()->back();
    }
}

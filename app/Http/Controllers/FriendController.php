<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function follow($id)
    {
        Friend::create([
            'follower_id' => auth()->user()->id,
            'followed_id' => $id
        ]);
        return redirect()->back();

    }
    public function unfollow($id)
    {
        Friend::where([
            'follower_id' => auth()->user()->id,
            'followed_id' => $id
        ])->delete();
        return redirect()->back();
    }
}

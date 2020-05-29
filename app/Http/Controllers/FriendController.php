<?php

namespace App\Http\Controllers;

use App\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function follow($id)
    {
        Friend::create([
            'follower_id' => $id,
            'followed_id' => auth()->user()->id
        ]);

    }
    public function unfollow($id)
    {
        Friend::where(
            'follower_id', $id,
            'followed_id', auth()->user()->id
        )->delete();
    }
}

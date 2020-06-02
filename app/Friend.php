<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'followed_id', 'follower_id',
    ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
    protected $hidden = [
        'lesson_id', 'user_id',
    ];

}

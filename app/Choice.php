<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function questions()
    {
        $this->belonsToMany('App\Question', 'question_id');
    }
    public function answers()
    {
        $this->hasMany('App\Answer');
    }
    protected $fillable = [
        'choice_id', 'question_id', 'is_correct',
    ];
}

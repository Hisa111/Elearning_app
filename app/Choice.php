<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function questions()
    {
       return  $this->belonsToMany('App\Question');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    protected $fillable = [
        'choice_id', 'question_id', 'is_correct', 'choice_text'
    ];
}

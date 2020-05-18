<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function categories()
    {
        $this->belongsTo('App\Category');
    }

    public function choices()
    {
        $this->hasMany('App\Choice', 'choice_id');
    }
    protected $fillable = [
        'question_text', 'category_id',
    ];
}

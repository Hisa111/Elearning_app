<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
    protected $fillable = [
        'question_text', 'category_id',
    ];
}

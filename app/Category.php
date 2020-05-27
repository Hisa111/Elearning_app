<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
    
    protected $fillable = [
        'title', 'description',
    ];
}

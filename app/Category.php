<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function questions()
    {
        $this->hasMany('App\Question');
    }
    protected $fillable = [
        'title', 'description',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function choices()
    {
        $this->belongsToMany('App\Choice', 'choice_id');

    }
    public function users()
    {
        $this->belongsToMany('APP\User', 'user_id');
    }
    protected $fillable = [
        'choice_id', 'user_id',
    ];
}

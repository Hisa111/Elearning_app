<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function friend()
    {
        return $this->has('App\Friend');
    }
    public function following()
    {
        return $this->belongsToMany('App\User', 'friends', 'follower_id', 'followed_id');
    }

    public function followed()
    {
        return $this->belongsToMany('App\User', 'friends', 'followed_id', 'follower_id');
    }
    public function is_following($followed_id)
    {
        if($this->following()->where('followed_id', $followed_id)->count() > 0)
        {
            return true;
        } else {
            return false;
        }
    }

    public function admin()
    {
        return $this->belongsToMany('App\User');
    }

    public function lessons()
    {
        return $this->hasMany('App\Lesson');

    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function have_answer($id)
    {
        if($this->answers()->where('choice_id', $id)->count() >= 1){
            return true;
        } else {
            return false;
        }
    }

    public function admin_check()
    {
        if ($this->admin_id >= 2){
            return true;
        } else {
            return false;
        }
    }
    
    

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','admin_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

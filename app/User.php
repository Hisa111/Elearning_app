<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function admin()
    {
        return $this->belongsToMany('App\User','users', 'id', 'admin_id');
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

    public function is_admin()
    {
        if ($this->admin() == 2){
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

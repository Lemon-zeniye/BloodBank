<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    // public function questionnaires(){
    //     return $this->hasMany(Questionnaire::class);
    // }
    // public static function boot(){
    //     parent::boot();
    //     static::created(function($user){
    //         $user->profile()->create([
    //             'title' => $user->username,
    //         ]);
    //     });
    // }
    // public function profile(){
    //     return $this->hasOne(Profile::class);
    // }
    // public function posts(){
    //     return $this->hasMany(Post::class)->orderBy('created_at','DESC');
    // }

    // public static function boot(){
    //     parent::boot();
    //     static::created(function($user){
    //         $user->profille()->create([
    //             'title' => "Edit your name here",
    //         ]);
    //     });
    // }

    // public function profille(){
    //     return $this->hasOne(Profille::class);
    // }
    // public function postts(){
    //     return $this->hasMany(Postt::class)->orderBy('created_at','DESC');
    // }
    // public function events(){
    //     return $this->hasMany(Events::class);
    // }


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username'
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


    //MY function
    public function events(){
        return $this->hasMany(Event::class);
    }
    public function donor(){
        return $this->hasOne(Donor::class);
    }
    public function questionnaires(){
        return $this->hasMany(Questionnaire::class);
    }

}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $guarded = [];
    public function path(){
        return url('/questionnaire/'.$this->id);
    }
    public function publicpath(){
        return url('/survey/'.$this->id);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function questionns(){
        return $this->hasMany(Questionn::class);
    }
    public function surveys(){
        return $this->hasMany(Survey::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionn extends Model
{
    protected $guarded = [];
    public function questionnaire(){
        return $this->belongsTo(Questionnaire::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function responses(){
        return $this->hasMany(SurveyResponses::class);
    }

}

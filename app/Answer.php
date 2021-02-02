<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];
    public function questionns(){
        return $this->belongsTo(Questionn::class);
    }
    public function responses(){
        return $this->hasMany(SurveyResponses::class);
    }
}

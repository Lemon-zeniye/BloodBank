<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public function donor(){
        return $this->belongsTo(Donor::class);
    }
}

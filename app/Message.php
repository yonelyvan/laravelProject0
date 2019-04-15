<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{   
    //MassAssignmentException
    protected $guarded = []; // no quiero proteger nada

    public function user(){
        return $this->belongsTo(User::class);///la relacion de pertenencia
    }
}

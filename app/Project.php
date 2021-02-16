<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function usuario(){
        return $this->belongsTo(User::class); //select * from user where project= 
    }

}

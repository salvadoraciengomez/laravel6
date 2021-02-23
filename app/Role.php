<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function abilities(){
        return belongsToMany(Ability::class)->wiithTimestamps();
    }

    public function allowTo($ability){
        $this->abilities()->save($ability);
    }
}

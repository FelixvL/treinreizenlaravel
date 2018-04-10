<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function ovchipcard(){
        return $this->hasOne('App\OVChipCard');
    }
}

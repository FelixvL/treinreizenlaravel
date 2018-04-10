<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        protected $fillable = ["id","name","nationality"];
    public function ovchipcard(){
        return $this->hasOne('App\OVChipCard');
    }
}

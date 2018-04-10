<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OVChipCard extends Model
{
    protected $fillable = ["id","saldo","expiredate"];
    public function client(){
//        return $this->hasOne('App\Client', 'user_id');
        return $this->belongsTo('App\Client');
    }
}

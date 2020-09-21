<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Consumer extends Model
{



    public function packet(){
        return $this->hasMany('App\Packet');
    }

    // public function costumer(){
    //     return $this->hasMany('App\Costumer');
    // }
}

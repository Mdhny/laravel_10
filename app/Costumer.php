<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{

//    whitelist
protected $fillable = ['name','packet_id'];
// protected $fillable = ['name','consumer_id'];

// blacklist
protected $guarded = ['id'];





    public function packet(){
        return $this->belongsTo('App\Packet');
    }

    // public function consumer(){
    //     return $this->belongsTo('App\Consumer');
    // }


}

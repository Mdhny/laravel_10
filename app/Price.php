<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{


// blacklist
protected $guarded = ['id'];

// use SoftDeletes;
// protected $dates = ['deleted_at'];




    public function packet(){
        return $this->belongsTo('App\Packet');
    }


}

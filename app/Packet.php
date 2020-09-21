<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Packet extends Model
{

//    whitelist
protected $fillable = ['name','consumer_id'];

// blacklist
protected $guarded = ['id'];

// use SoftDeletes;
// protected $dates = ['deleted_at'];




    public function consumer(){
        return $this->belongsTo('App\Consumer');
    }

    public function costumer(){
        return $this->hasMany('App\Costumer');
    }

    public function price(){
        return $this->hasOne('App\Price');
    }
}

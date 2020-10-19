<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $guarded = [];

    public function empresa(){
        return $this->belongsTo('App\organizers','organizers_id','id');
    }

}

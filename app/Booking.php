<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable=['user_id','room_id','booking_id'];
    
    public function Booking(){
        return $this ->belongsTo('App\Room');
    }
}

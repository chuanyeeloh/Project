<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Booking;
use Auth;

class Room extends Model
{
    //
    protected $fillable=['user_id','room_id'];
    
    public function Rooms(){
        return $this ->hasMany('App\Booking');
    }


    
}

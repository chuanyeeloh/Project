<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;
use Auth;

class Reservation extends Model
{
    //
    protected $fillable=['user_id'];
    protected $table = 'reservation';
    
    public function Reservation(){
        return $this ->hasMany('App\Booking');
    }


    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $fillable=['user_id','room_id','booking_id'];
    
    public function Admin(){
        return $this ->belongsTo('App\Room');
    }
}

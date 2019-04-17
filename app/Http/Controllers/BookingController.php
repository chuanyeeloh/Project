<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    
    public function store(){
        $r=request(); //request() all submited data
        $this->validate($r,[
            'id'=>'required',
            'user_id'=>'required',
            'booking_id'=>'required',
            'from_date' => 'required',
            'to_date' => 'required'
        ]);

    }
}
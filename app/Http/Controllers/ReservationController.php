<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;
use App\Room;
use Session;
use Auth;

class ReservationController extends Controller
{
    //
    public function create(){
        return view('reservation');
    }

    public function store(request $request){
     //request() all submited data
        
            $reservation = new reservation;
            $reservation->type = $request->type;
            $reservation->room_name = $request->room_name;
            $reservation->from_date = $request->from_date;
            $reservation->to_date = $request->to_date;
        
            $reservation->save();

        // dd($request->all());

        // $reservation=Reservation::create([
        //     $reservation->type,
        //     $reservation->room_name ,
        //     $reservation->from_date ,
        //     $reservation->to_date ,
        //     'user_id'=>Auth::id()
        // ]);
        
        Session::flash('success','Reservation was created');
        return redirect()->back();
    }

    public function show($id){
        $reservation=Reservation::where('id',$id)->first();
        return view('reservation.show')->with($reservation);
    }


}

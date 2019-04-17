<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;
use App\Room;
use Session;
use Auth;

class AdminController extends Controller
{
    //
    public function create(){
        return view('admin');
    }

    public function store(request $request){
     //request() all submited data
        
            $admin = new admin;
            $admin->type = $request->type;
            $admin->room_name = $request->room_name;
            $admin->from_date = $request->from_date;
            $admin->to_date = $request->to_date;
        
            $admin->save();
        
        Session::flash('success','Reservation was created');
        return redirect()->back();
    }

    public function show($id){
        $admin=Admin::where('id',$id)->first();
        return view('reservation.show')->with($admin);
    }

    public function list(){
        $reservation = reservation::all();
        return view('admin',['rsv'=>$reservation]);
        return redirect('admin');
    }

}

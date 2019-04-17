<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\reservation;
class RoomsController extends Controller
{
    //

    public function store(){
        $r=request(); //request() all submited data
        $this->validate($r,[
            'id'=>'required',
            'room_id'=>'required',
            'room_name'=>'required'
    ]);
    
    }
    public function show($id){
        $reservation=Reservation::where('id',$id)->first();
        return view('reservation.show')->with('r',$reservation);
    }

    public function index(){
        $posts = DB::table('posts')->paginate(5);
        return view('index',['posts'=> $posts]);
    }

    public function result(){
        $reservation = reservation::all();
        return view('rooms');
    }

    // public function search(Request $request){
    //     $search =$request->get('search');
    //     $posts = project::table('rooms')->where('room_name','like','%' .$search.'%')->paginate(5);
    //     return view('search',['posts'=>$posts]);
    // }

    // public function search(Request $request){
    //     $search = $request->get('search';
    //     $posts = DB::select("SELECT Room.ID, Room.user_id, Room.booking_id, Room.from_date, Room.to_date, Room.created_at, Room.updated_at") FROM 
    //     Booking LEFT JOIN Room on Booking RoomID = RoomID where Room.Type= ('Room')
    // }

    // public function store(Request $request){
    //     $id= $requests->get('id');
    //     $room_id=$requests->get('room_id');
    //     $room_name=$requests->get('room_name');
 
    // }
}

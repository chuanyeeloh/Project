<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Channel;

class ForumsController extends Controller
{
    //step 2
    public function index(){
        $discussions=Discussion::orderby('created_at','desc')->paginate(3); //take the data out
        return view('forum',['discussion'=>$discussions]); //The data put into Forums' HTML file 
    }

        public function channel($slug){
        $channel=Channel::where('slug',$slug)->first();
        return view('channel')->with('discussion',$channel->discussion()->paginate(3));
    }

}

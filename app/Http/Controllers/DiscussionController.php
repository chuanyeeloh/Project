<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\Reply;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function create(){
        return view('discuss');
    }

    public function store(){
        $r=request(); //request() all submited data
        $this->validate($r,[
            'channel_id'=>'required',
            'content'=>'required',
            'title'=>'required'
        ]);

        $discussion=Discussion::create([
            'title'=>$r->title,
            'content'=>$r->content,
            'channel_id'=>$r->channel_id,
            'user_id'=>Auth::id()
        ]);
        
        Session::flash('success','Discussion was successfully created');
        Return redirect()->back();
    }
        public function show($id){
            $discussion=Discussion::where('id',$id)->first();
            return view('discussions.show')->with('d',$discussion);
        }

        public function reply($id){
            $d=Discussion::find($id); //find the discussion with ID
            $reply=Reply::create([
                'user_id'=>Auth::id(),
                'discussion_id'=>$id,
                'content'=>request()->reply
            ]);

            Session::flash('success','Replies to discussion.');
            return redirect()->back();
        }
}

@extends('layouts.app')
@section('content')

    <div  class="panel panel-default">
        <div class="panel-heading">
        <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">
            {{ $d->user->name }}
        @if($d->is_being_watched_by_auth_users())
            <a href="{{ route('discussion',['id'=>$d->id])  }}" class="btn btn-xs btn-default pull-right">UnWatch</a>
        @else
            <a href="{{ route('discussion',['id'=>$d->id])  }}" class="btn btn-xs btn-default pull-right">Watch</a>
        @endif
        </div>
        <div class="panel-body">
           <h5> {{ $d->title }} </h5>
           <p class="text-center">{{ $d->content}}</p>
        </div>
        <div class="panel-footer">
            {{ $d->replies->count() }} Replies
        </div>

    </div> 
    @foreach($d->replies as $r)
        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ $r->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
                <span>{{ $r->user->name }} </span>
            </div>
            <div class="panel-body">
                <p class="text-center">
                {{ $r->content }}
                </p>
            </div>
        <div class="panel-footer"> 
                @if($r->is_liked_by_auth_user())
                    <a href="{{ route('reply.unlike', ['id' => $r->id ]) }}" class="btn btn-danger btn-xs">Unlike 
                    <span class="badge">{{ $r->likes->count() }} </span>
                    </a>
                @else
                    <a href="{{ route('reply.like', ['id' => $r->id ]) }}" class="btn btn-success btn-xs">Like 
                        <span class="badge">{{ $r->likes->count() }} </span>
                    </a>
                @endif
        </div>
        </div>
@endforeach


    <div class="panel panel-default">            
        <div class="panel-body">                
            @if(Auth::check())                    
    <form action="{{ route('discussion.reply', ['id' => $d->id ]) }}" method="post">                        
        {{ csrf_field() }}                        
        <div class="form-group">                            
            <label for="reply">Leave a reply...</label>                            
            <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>                        
        </div>                        
        <div class="form-group">                            
        <button class="btn pull-right">Leave a reply</button></div>                    
    </form>                
    @else                    
    <div class="text-center">                        
        <h2>Sign in to leave a reply</h2>                   
    </div>                
    @endif            
        </div>        
    </div>


@endsection
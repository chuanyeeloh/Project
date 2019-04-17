@extends('layouts.app')
@section('content')
    @foreach($discussion as $d) 
    <div  class="panel panel-default">
        <div class="panel-heading">
        <img src="{{ $d->user->avatar }}" alt="" width="50px" height="50px">
            {{ $d->user->name }}

            <a href="{{ route('discussion',['id'=>$d->id])  }}" class="btn btn-xs btn-default pull-right">View</a>

        </div>
        <div class="panel-body">
           <h5> {{ $d->title }} </h5>
           <p class="text-center">{{ str_limit($d->content),30 }}</p>
        </div>
        <div class="panel-footer">
            
        </div>

    </div> 
    @endforeach   

    <div class="text-center">{{ $discussion->links() }}</div>

@endsection
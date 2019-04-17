@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin: auto">
        <!-- <div class="col-md-4">
         
            <a href="{{ route('discussions.create') }}" class="form-control btn btn-primary">Booking a room</a>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <ul class="group-list">
                        <li class="list-group-item">
                            <a href="{{ route('forum') }}" style="text-decoration:none"> Home </a>
                        </li>
                    </ul>
                </div> -->
        </div>
                <!-- <a href="{{ route('discussions.create') }}" class="form-control btn btn-primary">Booking a room</a>
                <div class="panel panel-default">
                   
                    <div class="panel-body">
                            <ul class="group-list">
                                <li class="list-group-item">
                                   <a href="{{ route('forum') }}" style="text-decoration:none"> Home </a>
                                </li>
                            </ul>
                    </div> -->
                    
                </div>
            <div class="card">
                <div class="card-header">Welcome to Hotel Master</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

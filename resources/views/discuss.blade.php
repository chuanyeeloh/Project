@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new discussion</div>
                <form action="{{route('discussions.store')}}" method="post">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label for="content">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <label for="channel">Pick a channel</label>
                    <select name="channel_id" id="channel_id" class="form-control">
                        @foreach($channels as $channel)
                            <option value="{{ $channel->id }}">{{ $channel->title}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="content">Ask a question</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="text" name="channel" class="form-control"/>
                    <button type="submit" class="btn btn-success">Create Discussion</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts/default')

@section('content')

@include('messages/create')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <h2>Messages</h2>
            @foreach($messages as $message)
                <div class="message">
                    <p>{{ $message->body }}</p>
                </div>
            @endforeach
        </div>

        <div class="col-md-3">
            <h2>Users</h2>
            @foreach($users as $user)
                <div class="user">
                    <a href="#">{{ $user->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@stop

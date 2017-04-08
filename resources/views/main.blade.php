@extends('layouts.app')

@section('main')

        <div class="col-md-2 sidebar">
            <div class="user_pf">
                <div class="user_avatar"><img src="{{\Config::get('app.images.image').$userinfo->image}}" class="img-circle" alt="{{$user->name}}.' Avatar'" width="60px" height="auto"></div>
                <div class="user_name">{{$user->name}}</div>
                <div class="user_email">{{$user->email}}</div>
            </div>
        </div>
        <div class="col-md-10">

        </div>

@endsection
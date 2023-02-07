@extends('layouts.app')
@section('content')

@if($user->avatar)
    <img src="{{asset('storage/images/'.$user->avatar)}}">
@else
    <img src="{{asset('storage/images/default.jpg')}}">
@endif

@endsection

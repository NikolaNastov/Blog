@extends('layouts.app')

@section('content')
    <style>
        #Blogpost{
            width: 80%;
            margin-left: 10%;
        }
    </style>
<div id="Blogpost">
    <h1>{{ $post->title }}</h1>
    <img src="../uploads/{{ $post->image }}" width="500" height="500">
    <p>{!! $post->text !!} </p>
</div>
@endsection

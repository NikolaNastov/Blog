@extends('layouts.app')
<style>
    .blogpost{
        width: 60%;
        margin-left: 20%;
    }
</style>
@section('content')
    @foreach($posts as $post)
        <div class="blogpost">
            <h2><a href="/view/{{$post->id}}">{{$post->title}}</a></h2>
            <img src="/uploads/{{$post->image}}" width="500" height="500">
            <p>{!! $post->text !!}</p>
        </div>
    @endforeach
@endsection

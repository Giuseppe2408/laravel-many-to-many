@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <img src="{{$post->image}}" alt="{{$post->title}}">
    <h2>In category: {{ $post->category->name }}</h2>
    <p>{{$post->content}}</p>
    

@endsection
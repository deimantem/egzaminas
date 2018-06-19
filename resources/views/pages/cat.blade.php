@extends('layouts/main')
@section('content')


    @foreach ($cats as $post)
        <h5>Kategorija: {{$post->cat}}</h5>
        <h2>{{$post->name}}</h2>
        <p>{{$post->desc}}</p>
        <hr>
    @endforeach

@endsection

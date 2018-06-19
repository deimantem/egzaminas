
@extends('layouts/main')
@section('content')
    <h6>Kategorija: {{$post->cat}}</h6>
    <h4>{{$post->name}}</h4>
    <p>{{$post->desc}}</p>

    @if(Auth::id()==$post->user_id)
            <div class="btn-group btn-group-justified">
        <p><a class="btn btn-default" href="/post/{{$post->id}}/edit" role="button">Koreguoti</a></p>
        <p><a class="btn btn-default" href="/post/{{$post->id}}/delete" role="button">Ištrinti</a></p>
            </div>
    @endif

@endsection

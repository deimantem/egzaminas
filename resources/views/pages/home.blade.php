@extends('layouts/main')
@section('content')


    @foreach($posts as $post)

        <div class="col-md-4">
            <h6>Kategorija: {{$post->cat}}</h6>
            <h4>{{str_limit($post->name,100)}}</h4>
            <p>{{str_limit($post->desc,100)}} </p>
            <p><a class="btn btn-primary" href="post/{{$post->id}}" role="button">Plačiau</a></p>
        </div>
    @endforeach
    <div class="container">
        <div class="links">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

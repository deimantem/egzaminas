@extends('layouts/main')
@section('content')

    @include('includes/errors')
    <div class="content">
        <div class="title m-b-md">

            <h3>Koreguoti prekės informaciją</h3>
        </div>
        <form action="/post/{{$post->id}}" method="post" class="form-horizontal">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <label for="name">Prekės pavadinimas</label>
            <input type="text" name="name" id="name" value="{{$post->name}}">
            <label for="text">Prekės aprašymas</label>
            <input type="text" name="desc" id="desc" value="{{$post->desc}}">
            <button type="submit" name="submit" value="submit">Siųsti</button>
        </form>
    </div>

@endsection
<style>
    h3 {
        text-align: center;
       padding-bottom: 50px;
    }
</style>
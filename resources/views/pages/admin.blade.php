@extends('layouts/main')
@section('content')

    <table>
    <tr>
        <th>Prekės pavadinimas</th>
        <th>Aprašymas</th>
        <th>Plačiau</th>
        <th>Koreguoti</th>
        <th>Ištrinti</th>
    </tr>
        @foreach($posti as $post)

            <tr>
                <td><h3>{{str_limit($post->name,20)}}</h3></td>
                <td><p>{{str_limit($post->desc,50)}} </p></td>
                <td><p><a class="btn btn-default" href="post/{{$post->id}}" role="button">Plačiau &raquo;</a></p></td>
                <td><p><a class="btn btn-default" href="/post/{{$post->id}}/edit" role="button">Koreguoti</a></p></td>
                <td><p><a class="btn btn-danger" href="/post/{{$post->id}}/delete" role="button">Ištrinti</a></p></td>
            </tr>

        @endforeach

        </table>
    <hr>
    <p><a class="btn btn-danger"  href="/nauji">Nauja prekė</a></p>

@endsection
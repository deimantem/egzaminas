@extends('layouts/main')
@section('content')

    @include('includes/errors')
    <div class="content">
        <div class="title m-b-md">

            <h4>Nauja prekė</h4>
        </div>
        <form action="/irasai" method="post" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-row">
                <div class="col-md-4 ">
            <label class="control-label" for="name">Kategorija: </label>

            <select class="form-control" id="cat" name="cat" >
                @foreach($cats as $cat)
                <option value="{{$cat->cat}}">{{$cat->cat}}</option>
                @endforeach
            </select>
                </div>

                <div class="col-md-4 ">
                <label class="control-label" for="name">Prekės pavadinimas</label>
            <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="col-md-4 ">
                <label class="control-label" for="text">Prekės aprašymas</label>
                    <input class="form-control" type="text" name="desc" id="desc">
                </div>
                <div class="col-md-2 ">
                <button class="btn btn-primary" type="submit" name="submit" value="submit">Siųsti</button>
                </div>
            </div>
        </form>
    </div>


@endsection
<style>
    h4{
        text-align: center;
        padding-bottom: 50px;
    }
    .btn-primary {
        margin-top: 50px;
        margin-left: 475px;
    }

</style>
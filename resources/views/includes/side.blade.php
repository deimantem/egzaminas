<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

    <div class="list-group">
        <a href="/" class="list-group-item active">Kategorijos</a>

    @foreach ($cats as $cat)
            <a href="cat/{{$cat->id}}" class="list-group-item">{{$cat->cat}}</a>
        @endforeach
        <a href="/" class="list-group-item active">Atgal</a>

    </div>
</div>

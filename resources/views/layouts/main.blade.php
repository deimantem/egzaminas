
<!DOCTYPE html>
<html lang="en">
@include('includes/head')

<body>
@include('includes/nav')


<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>

            @include('includes/header')
            <div class="row">
                @yield('content')

            </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        @include('includes/side')

    </div><!--/row-->

    <hr>


    @include('includes/footer')

</div><!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
<script src="/js/offcanvas.js"></script>
</body>
</html>

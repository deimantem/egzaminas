<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Riedlentės</a>

        @if(Auth::check())

        <a class="navbar-brand" href="/nauji">Nauja prekė</a>
            @endauth
    </div>
    <div id="navbar" class="navbar-collapse collapse">

        @if(Auth::check())

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profilis</a></li>
                        <li><a href="/">Admin</a></li>
                        <li><a href="{{ route('logout') }}">Atsijungti</a></li>

                    </ul>
            </ul>
        @else{
        <form class="navbar-form navbar-right" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
            </div>
            <button type="submit" class="btn btn-success">{{ __('Login') }}

            </button>
            <button type="submit" class="btn btn-dark"><a href="/register">Registracija</a>

            </button>

        </form>
        }
        @endif
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<style>
    .navbar-inverse {
        background-color: #337ab7;
    }
    .navbar-brand {
        color:black;
    }

</style>
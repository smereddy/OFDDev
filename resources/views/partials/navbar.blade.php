  <link rel="stylesheet" href="{{ url('css') }}/nav.css"/>

  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/img/c40.png') }}"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><strong>OMAHA FIRE DEPARTMENT</strong></a></li>
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
        {{--<li class="dropdown">--}}
          {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, {{ Auth::user()->name }}! <span class="caret"></span></a>--}}
          {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="{{ route('users.index') }}">Manage</a></li>--}}
            {{--<li role="separator" class="divider"></li>--}}
            {{--<li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>--}}
          {{--</ul>--}}
        {{--</li>--}}
      </ul>
    </div>
  </div>
</nav>

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
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="All Assets"><a href="{{ route('all_assets.index') }}"><i class="fa fa-th fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Stations"><a href="{{ route('stations.index') }}"><i class="fa fa-building fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Vehicles"><a href="{{ route('vehicles.index') }}"><i class="fa fa-ambulance fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Service"><a href="{{ route('repairs.index') }}"><i class="fa fa-wrench fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Vendor"><a href="{{ route('vendors.index') }}"><i class="fa fa-tags" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Grants"><a href="{{ route('grants.index') }}"><i class="fa fa-usd fa-lg" aria-hidden="true"></i></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Create"><a href="{{ route('all_assets.create') }}"><i class="fa fa-plus" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip nav-icon" data-placement="bottom" title="Inactive"><a href="{{ url('trashes') }}"><i class="fa fa-bell-slash" aria-hidden="true"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, {{ Auth::user()->name }}! <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('users.index') }}">Manage</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


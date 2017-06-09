<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laravel soft deleting records</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::segment(1) == 'active' ? 'active' : Request::segment(1) == '' ? 'active' : '' }}"><a href="{{ url('active') }}">  Active States</a></li>
            <li class="{{ Request::segment(1) == 'deleted' ? 'active' : '' }}"><a href="{{ url('deleted') }}">Deleted States</a></li>
            <li class="{{ Request::segment(1) == 'all' ? 'active' : '' }}"><a href="{{ url('all') }}">All States</a></li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
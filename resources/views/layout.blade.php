<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  

</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>



        @if(Auth::user())

        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

       <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Welcome:  
          <span class="hidden-xs">&nbsp;&nbsp;{{ucfirst(Auth::user()->name)}}</span>
        </a>
        <ul class="dropdown-menu" style="width:100px!important">
          <div>
            <a href="{{ route('logout') }}" class="btn btn-primary" style=width:100%>Sign out</a>
          </div>
        </ul>
      </li>

      @else
      <li><a href="{{URL::to('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endif
    </ul>
  </div>
</nav>
<div class="container">
  @yield('content')
</div>
<script></script><link rel="stylesheet" type="text/css" href="{{asset('js/ajax.js')}}" >

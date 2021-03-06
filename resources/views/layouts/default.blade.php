<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Sample')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <a href="{{route('home')}}" id="logo">Sample App</a>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{route('help')}}">帮助</a></li>
              <li><a href="{{route('login')}}">登录</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="contrainer">
    <div class="col-md-offset-1 col-md-10">
      @include('shared._message')
      @yield('content')
    </div?
    </div>
  </body>
</html>
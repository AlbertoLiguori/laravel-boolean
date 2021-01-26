<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @yield('content')

    <ul>

    @foreach(config('header.routes') as $route)

            <li> <a href="{{ route($route['pathId']) }}"> {{ $route['displayText'] }} </a> </li> 

    @endforeach



    </ul>


  </body>
</html>

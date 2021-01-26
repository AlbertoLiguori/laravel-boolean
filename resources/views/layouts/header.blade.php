<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav>

          <div class="container">

                <div class="row d-flex">

                      <div class="left-nav">

                            <img src="img/logo.png" alt="">

                      </div>

                      <div class="right-nav">

                              <ul class="d-flex">

                                    @foreach(config('header.routes') as $route)

                                      <li> <a href="{{ route($route['pathId']) }}"> {{ $route['displayText'] }} </a> </li>

                                    @endforeach

                              </ul>

                      </div>

                </div>

          </div>

    </nav>


  </body>
</html>

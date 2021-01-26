@include('common.header')

<section class="first-section">

          <div class="container">

                <div class="row d-flex">

                      <div class="first-section-left d-flex flex-1">

                           <h1>@yield('main-title')</h1>

                           <h3>@yield('main-subtitle')</h3>

                           @section('list')
                           @show

                           @section('button')
                           @show

                      </div>

                      <div class="first-section-right flex-1">

                            <img src="@yield('first-section-imgsrc')" alt="">

                      </div>

                </div>

          </div>

</section>

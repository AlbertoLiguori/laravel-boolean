@extends ('layouts.main')

@section('section-2')

<section class="section-utenti">

          <div class="container">

                <div class="row">

                <ul class="d-flex">

                  @foreach ($allData as $utente)

                      <li class="utente d-flex">
                            <img class="user-img" src=" {{ $utente['image'] }} " alt="">
                            <h5>{{ $utente['first_name'] }} </h5>
                            <h5>{{ $utente['last_name'] }} </h5>

                            <h6 class="author"> {{ $utente['email'] }} </h6>
                            <span class="year"> {{ $utente['gender'] }} </span>
                      </li>

                  @endforeach

                </ul>

                </div>

          </div>
  </section>

@endsection

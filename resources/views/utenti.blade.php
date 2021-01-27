@extends ('layouts.main')

@section('section-2')

  <ul class="cds-container container">

    @foreach ($allData as $utente)

        <li class="cd">
              <img src=" {{ $utente['image'] }} " alt="">
              <h5>{{ $utente['first_name'] }} </h5>
              <h5>{{ $utente['last_name'] }} </h5>

              <h6 class="author"> {{ $utente['email'] }} </h6>
              <span class="year"> {{ $utente['gender'] }} </span>
        </li>

    @endforeach

  </ul>
@endsection

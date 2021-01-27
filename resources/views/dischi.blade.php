@extends ('layouts.main')

@section('section-2')
<section class="section-dischi">

          <ul class="cds-container container">

            @foreach ($allData as $disco)

                  <li class="cd">
                        <img src=" {{ $disco['poster'] }} " alt="">
                        <h3>{{ $disco['title'] }} </h3>
                        <span class="author"> {{ $disco['author'] }} </span>
                        <span class="year"> {{ $disco['year'] }} </span>
                  </li>

            @endforeach

          </ul>

</section>
@endsection

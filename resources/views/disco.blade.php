@extends ('layouts.main')

@section('section-2')

    <img src=" {{ $disco['poster'] }} " alt="">
    <h3>{{ $disco['title'] }} </h3>
    <span class="author"> {{ $disco['author'] }} </span>
    <span class="year"> {{ $disco['year'] }} </span>
    <a href="/dischi/{{$disco['id']}}">vedi dettaglio</a>

@endsection

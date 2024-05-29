@extends('layouts.app')
@section('title', 'DC-Comics')

@section('content')
@include('partials.header')
<main>
    <section>
      <div class="container">
        <h1 class="fs-2">Titolo del fumetto:{{ $comic->title }}</h1>
      </div>
      <div class="container">
        <ul>
            <li>Descrizione:{{$comic->description}}</li>
            <li>Copertina:
                <br>
                <img src="{{$comic->thumb}}" height="300" width="300" alt="">
            </li>

            <li>Prezzo: {{ $comic->price }}</li>
            <li>Serie: {{$comic->series}}</li>
            <li>Data di Rilascio: {{$comic->sale_date}}</li>
            <li>Tipo: {{ $comic->type }}</li>
        </ul>
      </div>
      <div class="container">
        <div>
          {!! $comic->description !!}
        </div>
      </div>

      <a class="btn btn-primary" href="{{route ('comics.create')}}">aggiungi un fumetto</a>
    </section>
  </main>
@endsection
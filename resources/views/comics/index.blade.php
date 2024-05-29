@extends('layouts.app')


@section('title', 'DC-Comics')

@section('content')

@include('partials.header')

    <h1>Ecco i fumetti più famosi di Sempre</h1>
    <main>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-auto">
                  <h1 class="fs-2">I nostri comics</h1>
              </div>
              <div class="col-auto ms-auto">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">nuovo comics</a>
              </div>
            </div>
          </div>
          <div class="container">
            <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Immagine</th>
            <th>Link</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Rilascio</th>
            <th>Tipo</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
              <tr>
                <td>{{ $comic->id }}</td>
                <td>
                  <img src="{{ $comic->thumb }}" height="250" width="250" alt="">
                </td>
                <td>
                  <a href="{{ route('comics.show', $comic ) }}">
                    {{ $comic->title }}
                  </a>
                </td>
                <td>{{ $comic->description}}</td>
                <td>{{ $comic->price }}</td>
                <td>{{$comic->series }}</td>
                <td>{{$comic->sale_date }}</td>
                <td>{{$comic->type }}</td>


              </tr>
          @endforeach
        </tbody>
      </table>
          </div>
        </section>
      </main>
@endsection

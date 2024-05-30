@extends('layouts.app')
@section('title', 'DC-Comics')

@section('content')
@include('partials.header')
    
<main>
    <section>
      <div class="container">
        <p>comics.edit</p>
        <h2 class="fs-2">Modifica fumetto: {{$comic->title}}</h2>
      </div>
      <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
  
          {{-- Cross Site Request Forgering --}}
          @csrf 
          {{-- metto il method put per l'update --}}
          @method('PUT')
  
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{$comic->title}}">
          </div>
  
          <div class="mb-3">
            <label for="thumb" class="form-label">Url Image</label>
            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{$comic->thumb}}">
          </div>
  
          <div class="mb-3">
            <label for="sale_date" class="form-label">data di rilascio</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Anno di rilascio" value="{{$comic->sale_date}}">
          </div>
  
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci un prezzo" value="{{$comic->price}}">
          </div>
  
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Tipo di serie" value="{{$comic->series}}">
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Tipo del fumetto" value="{{$comic->type}}">
          </div>
  
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione" value="{{$comic->description}}"></textarea>
          </div>
  
          <button class="btn btn-primary">salva</button>
        </form>
      </div>
    </section>
  </main>
@endsection
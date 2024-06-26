@extends('layouts.app')
@section('title', 'DC-Comics')

@section('content')
@include('partials.header')
    
<main>
    <section>
      <div class="container">
        <h2 class="fs-2">Crea un nuovo fumetto</h2>
      </div>
      <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
  
          {{-- Cross Site Request Forgering --}}
          @csrf 
  
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto">
          </div>
  
          <div class="mb-3">
            <label for="thumb" class="form-label">Url Image</label>
            <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://...">
          </div>
  
          <div class="mb-3">
            <label for="sale_date" class="form-label">description</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Anno di rilascio">
          </div>
  
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Inserisci un prezzo">
          </div>
  
          <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Tipo di serie">
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="Tipo del fumetto">
          </div>
  
          <div class="mb-3">
            <label for="description" class="form-label">Anno di rilascio</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione"></textarea>
          </div>
  
          <button class="btn btn-primary">Crea</button>
        </form>
      </div>
    </section>
  </main>
@endsection
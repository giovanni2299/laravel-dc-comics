<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicCcontroller extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }
    
    public function create()
    {
        return view('comics.create');
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }


    public function store(Request $request)
    {
        // dump('Metodo store');

        // recuperiamo i dati che arrivano dal form
        $form_data = $request->all();

        //creao l'instanza popolo i dati e li salvo nel db
        $new_comic = Comic::create($form_data);

        //creo l'instanza di Comic
        // $new_comic = new Comic();

        // popoliamo l'instanza di Comic con i dati dal form 
        // $new_comic->title = $form_data['title'];
        // $new_comic->description = $form_data['description'];
        // $new_comic->thumb = $form_data['thumb'];
        // $new_comic->price = $form_data['price'];
        // $new_comic->series = $form_data['series'];
        // $new_comic->sale_date = $form_data['sale_date'];
        // $new_comic->type = $form_data['type'];

        // // salviamo l'istanza ->save()
        // $new_comic->save();

        // return redirect()->route('comics.show', $new_comic);
        return to_route('comics.show', $new_comic);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();

        $comic->fill($form_data); //non salva automaticamente sul db
        
        // se qui dobbiamo fare qualcos'altro
        $comic->save();

        //redirect alla comics show
        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}

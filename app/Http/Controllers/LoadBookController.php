<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LoadBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.load');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //  dd($request);
      $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        'pdf' => 'required|mimes:pdf',
        'id_categories' => 'exists:categories,id',
        'id_autors' => 'exists:autors,id|array',
    ]);
    
    // Guardar imagen y PDF
    $imageName = time() . '.' . $request->imagen->extension();
    $request->imagen->storeAs('images', $imageName, 'public');
    
    $pdfName = time() . '.' . $request->pdf->extension();
    $request->pdf->storeAs('pdfs', $pdfName, 'public');
    
    // Crear el libro
    $book = Book::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'imagen' => 'images/' . $imageName,
        'pdf' => 'pdfs/' . $pdfName,
        'id_categories' => '2',
        'id_autors' => '3',
    ]);
    
    // Asociar autores al libro
   // $book->autors()->attach($request->id_autors);
    //$book->category()->attach($request->id_categories);
    
      //  $book->autors()->attach($request->id_autors);

        // Asociar autores (asumiendo que estás usando una relación muchos a muchos)
//$book->autors()->sync($request->id_autors);
      
      //  return redirect()->route('layouts.index')->with('success', 'Libro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

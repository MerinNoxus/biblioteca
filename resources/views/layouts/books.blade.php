@extends('layouts.app')

@section('content')
<section class="news-detail-header-section text-center">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h1 class="text-white">Todos los libros para tí</h1>
            </div>

        </div>
    </div>
</section>
   <section id="gallery" class="m-5">
    <div class="container">
      <div class="row">
          @foreach($books as $book)
              <div class="col-md-4"> <!-- Ajusta el número según cuántos libros quieras por fila, 4 aquí significa 3 libros por fila -->
                  <div class="card mb-4"> <!-- mb-4 para dar un margen inferior entre las tarjetas -->
                      <img src="{{ asset('storage/' . $book->imagen) }}" alt="" height="480" class="card-img-top">
                      <div class="card-body">
                          <h5 class="card-title">{{$book->titulo}}</h5>
                          <p class="card-text">{{ Str::limit($book->descripcion, 200) }}</p>
                          <a href="{{ asset('storage/' . $book->pdf) }}" class="btn btn-outline-primary btn-sm" target="_blank">Leer Más</a>
                          <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
     
  </div>
  
  <div class="row">
    <div class="col-12 d-flex justify-content-center pt-4">
        {{ $books->links()}}
    </div>
</div>
    
    </section>

@endsection
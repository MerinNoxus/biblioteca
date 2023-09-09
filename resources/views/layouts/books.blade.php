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
       <div class="col-lg-4 mb-4">

        @foreach($books as $book)
        <div class="card">
          <img src="{{ asset('storage/' . $book->imagen) }}" alt="" height="450" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{$book->titulo}}</h5>
            <p class="card-text">{{ Str::limit($book->descripcion, 150) }}</p>
            <a href="{{ asset('storage/' . $book->pdf) }}"class="btn btn-outline-primary btn-sm" target="_blank">Leer Más</a>


            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
          </div>
         </div>
       @endforeach
       </div>
    
    
    </section>

@endsection
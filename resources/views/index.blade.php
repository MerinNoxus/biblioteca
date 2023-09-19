@extends('layouts.app')

@section('content')


<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('asset/images/slide/banner_octavio.png')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>"Piedra de sol" (1957)</h1>

                                <p>Uno de sus poemas más célebres, es un poema circular que aborda temas del tiempo, el amor y la historia.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('asset/images/slide/banner_oscarwilde.png')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>"El retrato de Dorian Gray" (1890) </h1>

                                <p>La única novela de Wilde, que explora temas de decadencia, moralidad, y la naturaleza del mal.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('asset/images/slide/banner_elenagarro.png')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>"Los recuerdos del porvenir" (1963) </h1>

                                <p>Considerada por muchos como su obra maestra, esta novela explora la relación entre memoria, tiempo y política en un pequeño pueblo mexicano.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('asset/images/slide/banner_dickends.png')}}"
                                class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>"Un cuento de Navidad" ("A Christmas Carol", 1843) </h1>

                                <p> Tal vez su cuento más famoso, este relato de un hombre llamado Ebenezer Scrooge y su transformación gracias a la visita de tres espíritus es un clásico de la literatura navideña.</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">La importancia de leer</h2>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <i class="fa-solid fa-land-mine-on fa-bounce fa-2xl" style="font-size:50px;"></i>
                        <p class="featured-block-text">Amplía <strong>el conocimiento.</strong></p>
                 </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <i class="fa-solid fa-brain fa-beat fa-2xl" style="font-size:50px;"></i>
                        <p class="featured-block-text"><strong>Estimula </strong> la mente.</p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <i class="fa-solid fa-person-harassing fa-bounce fa-2xl" style="font-size:50px;"></i>

                        <p class="featured-block-text">Mejora  <strong>la empatía y comprensión.</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="#" class="d-block">
                        <i class="fa-regular fa-face-grin-wide fa-beat-fade fa-2xl" style="font-size:50px;"></i>
                        <p class="featured-block-text"><strong>Enriquece </strong> el lenguaje.</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>








<section class="testimonial-section section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h2 class="mb-lg-3">Frases Célebres</h2>

                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">La vida es una obra de teatro que no permite ensayos.</h4>

                                <small class="carousel-name"><span class="carousel-name-title">Octavio</span>,
                                    Paz</small>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">Todo es olvidable, menos el minuto que pasa.</h4>

                                <small class="carousel-name"><span class="carousel-name-title">Elena</span>,
                                    Garro</small>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">No es que tengamos poco tiempo, sino que perdemos mucho.</h4>

                                <small class="carousel-name"><span class="carousel-name-title">Lucio </span>,
                                    Anneo Séneca</small>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">"La vida no es muy seria en sus cosas.</h4>

                                <small class="carousel-name"><span class="carousel-name-title">Juan </span>,
                                    Rulfo</small>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <h4 class="carousel-title">"El dolor es inevitable, el sufrimiento es opcional</h4>

                                <small class="carousel-name"><span class="carousel-name-title">Buda </span>,
                                    Gautama</small>
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                <img src="{{asset('asset/images/avatar/Octavio_Paz perfil.jpg')}}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                <img src="{{asset('asset/images/avatar/Elena-GarroPerfil.jpg')}}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                <img src="{{asset('asset/images/avatar/senecaPerfil.jpg')}}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>

                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                <img src="{{asset('asset/images/avatar/juanrulfoPerfil.jpg')}}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                            <li data-bs-target="#testimonial-carousel" data-bs-slide-to="4" class="">
                                <img src="{{asset('asset/images/avatar/buda.jpg')}}"
                                    class="img-fluid rounded-circle avatar-image" alt="avatar">
                            </li>
                        </ol>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="contact-section section-padding" id="section_6" >
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                <div class="contact-info-wrap">
                    <h2>Información</h2>

                    <div class="contact-image-wrap d-flex flex-wrap">
                        <img src="{{asset('asset/images/yo-perfil.jpg')}}"
                            class="img-fluid avatar-image" alt="">

                        <div class="d-flex flex-column justify-content-center ms-3">
                            <p class="mb-0">José Francisco Pérez Merino</p>
                            <p class="mb-0"><strong>Ingeniero en Sistemas Computacionales y Desarrollador Web</strong></p>
                        </div>
                    </div>

                    <div class="contact-info">
                        <h5 class="mb-3">Contacto</h5>

                        <p class="d-flex mb-2">
                            <i class="bi-geo-alt me-2"></i>
                            Puebla, Pue.
                        </p>

                        <p class="d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel:  733-337-1201">
                                733-337-1201
                            </a>
                        </p>

                        <p class="d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="
                            perezmerinojosefrancisco@gmail.com
                            ">
                                
                                perezmerinojosefrancisco@gmail.com

                            </a>
                        </p>
                       
                            <ul class="social-icon">
                             
        
                                <li class="social-icon-item">
                                    <a href="https://www.facebook.com/Francisco.Merinfap" class="social-icon-link bi-facebook" target="_blank"></a>
                                </li>
        
                                <li class="social-icon-item">
                                    <a href="https://instagram.com/francisco.float?igshid=OGQ5ZDc2ODk2ZA==" class="social-icon-link bi-instagram" target="_blank"></a>
                                </li>
        
                           
        
                                <li class="social-icon-item">
                                    <a href="https://www.linkedin.com/in/jos%C3%A9-francisco-p%C3%A9rez-merino-974415285/" class="social-icon-link bi-linkedin" target="_blank"></a>
                                </li>
                            </ul>
                    
                       
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mx-auto">
                <form class="custom-form contact-form" action="#" role="form">
                    <h2>Formulario de Contacto</h2>

                  
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="first-name" disabled id="first-name" class="form-control"
                                placeholder="Alma" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="last-name" disabled id="last-name" class="form-control"
                                placeholder="M" required>
                        </div>
                    </div>

                    <input type="email" name="email" id="email" disabled pattern="[^ @]*@[^ @]*" class="form-control"
                        placeholder="alma69@gmail.com" required>

                    <textarea name="message" rows="5" disabled class="form-control" id="message"
                        placeholder="¿En qué podemos ayudarte?"></textarea>

                    <button type="submit" class="form-control">Enviar Mensaje</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
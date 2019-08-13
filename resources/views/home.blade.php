@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Todo en un sólo lugar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="bd-example">

                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100" alt="imagen1">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Encontra lo que tu mejor amigo necesita</h5>
                                <p>Alimento balanceado para todas las edades</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('img/peyga.jpg') }}" class="d-block w-100" alt="imagen2">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Hacelo feliz</h5>
                                <p>Trabajamos con las mejores marcas!</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="imagen3">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Encontra eso que estas buscando</h5>
                                <p>Respaldados por las mejores veterinarias del pais!</p>
                              </div>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>


  <div class="container-fluid">
    <div class="row mt-3">
  <div class="col-sm-12 col-md-4">
<div class="card" style="width: 18rem;">
<img src="{{ asset('img/veterinario.jpg') }}" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Veterinarios</h5>
<p class="card-text">Brindamos una extensa red de clinicas y consultorios veterinarios que me mejor se adapte a cada cliente según su mascota.</p>
<a href="{{ url('/service') }}" class="btn btn-primary">Ingresa al directorio</a>
</div>
</div>
</div>

<div class="col-sm-12 col-md-4">
<div class="card" style="width: 18rem;">
<img src="{{ asset('img/comida.jpg') }}" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Alimento de mascotas</h5>
<p class="card-text">Acá podes comprar el alimento que tu amigo necesita, entrá y adquirí productos de las mejores marcas.</p>
<a href="{{ url('/listaProducto') }}" class="btn btn-primary">Ingresa a compras</a>
</div>
</div>
</div>

<div class="col-sm-12 col-md-4">
<div class="card" style="width: 18rem;">
<img src="{{ asset('img/hotel.jpg') }}" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Cuidadores de mascotas</h5>
<p class="card-text">¿Te vas de viaje? No te preocupes por tu mascota, contamos con una extensa red de anfitriones que pueden encargarse de el.</p>
<a href="{{ url('/service') }}" class="btn btn-primary">Ingresa al directorio</a>
</div>
</div>
</div>
</div>

  <div class="row mt-3">
    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
      <img src="{{ asset('img/accesorios.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Accesorios para mascotas</h5>
      <p class="card-text">Mima a tu mascota con nuestra amplia seleccion de juguetes pensados para el, asi como multiples accesorios que pueden hacer su vida un poco mas feliz.</p>
      <a href="{{ url('/listaProducto') }}" class="btn btn-primary">Ingresa a compras</a>
      </div>
      </div>
      </div>

      <div class="col-sm-12 col-md-4">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/paseador.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Paseadores</h5>
        <p class="card-text">Contamos con todo un grupo de personas dedicadas a pasear a tu mascota y disfrutar del tiempo que desees de un lindo paseo para tu mascota.</p>
        <a href="{{ url('/service') }}" class="btn btn-primary">Ingresa al directorio</a>
        </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-4">
        <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/perdido.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Mascotas perdidas</h5>
        <p class="card-text">En esta sección podras encontrar números de emergencia, correos eléctronicos y otras formas de comunicación para tratar los temas de extravío de mascotas.</p>
        <a href="{{ url('/service') }}" class="btn btn-primary">Ingresa al directorio</a>
        </div>
        </div>
      </div>
    </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

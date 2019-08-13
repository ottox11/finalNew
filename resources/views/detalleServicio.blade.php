@extends('layouts.app')

@section('content')

  <div class="container">
  <h1 class="text-center">Detalle del Servicio</h1>

  @if (session()->has('status'))

  <div class="alert alert-success" role="alert">{{ session('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>

  @endif

  <div class="container">
    <div class="card">
    	<div class="row">
    		<aside class="col-sm-5 border-right">
          <article class="gallery-wrap">
            <div class="img-small-wrap">
              <div> <img src="{{Storage::url($service->image)}}"></div>
            </div> <!-- slider-product.// -->
          </article> <!-- gallery-wrap .end// -->
    		</aside>
    		<aside class="col-sm-7">
          <article class="card-body p-5">

     	       <h1 class="card-title mb-3">{{$service->service_name}}</h1>

             <p class="price-detail-wrap">
    	          <span class="price h3 text-warning">
    		          <span class="email"></span><span class="num">{{$service->email}}</span>
    	          </span>
            </p>
     	        <h5 class="card-title mb-3">{{$service->address}}</h5>
              <h5 class="card-title mb-3">{{$service->contact_phone}}</h5>
              <a href="{{ url('service') }}" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="btn"></i> Volver a la lista </a>
            <hr>

          </article>
    		</aside>
    	</div>
    </div>
  </div>

@endsection

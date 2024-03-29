@extends('layouts.app')

@section('content')

  <div class="container">
  <h1 class="text-center">Detalle del Producto</h1>

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
            <div class="img overflow-hidden">
              <div> <a href="#"><img src="{{Storage::url($product->image)}}"></a></div>
            </div> <!-- slider-product.// -->
          </article> <!-- gallery-wrap .end// -->
    		</aside>
    		<aside class="col-sm-7">
          <article class="card-body p-5">
    	       <h3 class="card-text">{{$product->brand}}</h3>

     	       <h1 class="card-title mb-3">{{$product->product_name}}</h1>

             <p class="price-detail-wrap">
    	          <span class="price h3 text-warning">
    		          <span class="currency">AR $</span><span class="num">{{$product->price_unit}}</span>
    	          </span>
            </p>

            <hr>
    	      <a href="/carrito/{{auth()->user()->id}}/{{$product->id}}"  class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Agregar a Carrito </a>

            <a href="{{ url('listaProducto') }}" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="btn"></i> Volver a la lista </a
          </article>
    		</aside>
    	</div>
    </div>
  </div>

@endsection

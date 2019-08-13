@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Detalle del Producto</h1>

@if (session()->has('status'))
<div class="alert alert-success" role="alert">{{ session('status')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
@endif

          <div class="product-block">
            <img src="{{Storage::url($product->image)}}">
          </div>

            <div class="product-block">
              <h3 class="card-text">{{$product->product_name}}</h3><hr>
            </div>

            <div class="product-info">
             <h5 class="card-title">{{$product->brand}}</h5>
            	<span class="price-new">{{$product->price_unit}}</span>
              <p>
                  <a href="/carrito/{{auth()->user()->id}}/{{$product->id}}">Comprar</a>
              </p>
                </div>
      </li>


  </ul>
</div>

@endsection

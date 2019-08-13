@extends('layouts.app')

@section('content')

<div class="container">
<br>  <h1 class="tituloLista">Carrito de Compras</h1>
<hr>

@if (session()->has('status'))
<div class="alert alert-success" role="alert">{{ session('status')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
@endif

@foreach($products as $product)
<ul class="list-unstyled">
  <li class="media">
    <img src="{{Storage::url($product->image)}}" class="mr-3" id="imgMascota" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">{{$product->brand}}</h5>
      <p>{{$product->product_name}}</p>
      <h4>${{$product->price_unit}}</h4>
        <a href="/borrarCarrito/{{auth()->user()->id}}/{{$product->id}}" class="btn btn-primary">Eliminar del carro de compras</a>
    </div>
  </li>

</ul>
@endforeach
<br>
<br>
<div class="alert alert-success" role="alert"><h2>Total: ${{Auth::user()->products->sum('price_unit')}}</h2>
</div>
<button type="button" id="finCompra" class="btn btn-primary" onClick="alert('¡Ha finalidado su compra!')">Finalizar Compra</button>

@endsection

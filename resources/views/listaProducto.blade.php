@extends('layouts.app')

@section('content')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{!! asset('css/productsAdmin.css') !!}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<!------ Include the above in your HEAD tag ---------->


<div class="container">

  <div class="row">

    <div class="page-title">

    <br>  <h1 class="card-title">Lista de Productos</h1>
    <hr>

    <div class="formulario">
      {{Form::open(['route' => 'products.listado', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}

    </div>
    <div class="form-group">
    {{Form::text('product_name', null, ['class' => 'form-control', 'placeholder'=> 'nombre del producto'])}}
    </div>
    <button type="submit" class="btn btn-primary"  aria-pressed="false" autocomplete="off">
      Buscar
    </button>
    <button type="submit" class="btn btn-primary"  aria-pressed="false" autocomplete="off">
      volver
    </button>

    <br>
    <br>

    {{Form::close()}}

    </div>

    <div class="row">
      <div class="card-columns">
        @foreach($product as $prod)
        <a href="{{ route('detalleProducto', $prod->id) }}">
        <div class="card p-3">
          <img class="card-img-top" src="{{Storage::url($prod->image)}}" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{$prod->brand}}</p>
            <h3 class="card-title">{{$prod->product_name}}</h3>
          </div>
          <div class="card-footer">
            <h5 class="price-new" href="" >AR $ {{$prod->price_unit}}</h5>
          </div>
        </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</div>






{!! $product->render() !!}
<!--container end-->
@endsection

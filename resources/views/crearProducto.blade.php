@extends('layouts.app')

@section('content')

<body>

<div class="container">

  <div class="container">
	<div class="row">
  		<div class="col-md-12">
   		<h1>Mundo Mascotas - Crear nuevo producto</h1>
      	</div>
  	</div>
<br>
<br>
@if (session()->has('status'))
<div class="alert alert-success" role="alert">{{ session('status')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
  @else
  <div class="alert alert-danger" role="alert">Error al guardar los datos <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
    @endif

<div class="row">

  <div class="col-md-6">
  <form  action="/crearProducto" role="form" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

      <div class="form-group">
    <label for="brand" class="loginFormElement">Marca del producto</label>
    <input class="form-control" name="brand" value="{{ old('brand') }}" id="productbrand">
    <p class="error_noti"> @if ($errors->has('brand'))
{{ $errors->first('brand') }}
 @endif </p>
  </div>

 <div class="form-group">
   <label for="productname" class="loginFormElement">Nombre del Producto</label>
   <input class="form-control" name="product_name" value="{{ old('product_name') }}" id="productname">
   <p class="error_noti"> @if ($errors->has('product_name'))
{{ $errors->first('product_name') }}
@endif </p>
 </div>

 <div class="form-group">
   <label for="productprice" class="loginFormElement"><strong>Precio del producto</strong></label>
   <input class="form-control" name="price_unit" value="{{ old('price_unit') }}" id="productprice">
  <p class="error_noti"> @if ($errors->has('price_unit'))
{{ $errors->first('price_unit') }} @endif </p>

<div class="form-group">
  <label for="stock" class="loginFormElement"><strong>Cantidad en stock</strong></label>
  <input class="form-control" name="stock" value="{{ old('stock') }}" id="productstock">
 <p class="error_noti"> @if ($errors->has('stock'))
{{ $errors->first('stock') }}
@endif </p>
 </div>


<div class="form-group">

<label class="control-label">Imagen</label>

<input class="filestyle" data-icon="false" name="image" type="file" id="productimage">
<p class="error_noti"> @if ($errors->has('image'))
{{ $errors->first('image') }}
@endif </p>
</div>


    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Añadir producto</button>

    </div>


  </form>


  </div>

  </body>








  </div>

  <!-- /.container -->

<footer>
  <hr>
    <div class=" container text-right align-bottom">
    <p>Shopping Cart | © Copyright 2019, All Rights Reserved</p>
    </div>
</footer>
</div>
<div id="push">
</div>

</div>


@endsection

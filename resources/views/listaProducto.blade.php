@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{!! asset('css/productsAdmin.css') !!}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
<br>  <h1>Lista de productos</h1>
<hr>


<div class="row">
  @foreach($products as $product)
  <div class="col-md-3">
  	<figure class="card card-product">
		<div class="img-wrap">
			<img src="{{Storage::url($product->image)}}" class="card-img-top-dimension">

		</div>
		<figcaption class="info-wrap">
			<h5 class="title text-dots"><a href="#">{{$product->brand}}</a></h5>
      <h6 class="title text-dots"><a href="#">{{$product->product_name}}</a></h6>
			<div class="action-wrap">
				<a href="{{ route('detalleProducto', $product->id) }}" class="btn btn-primary btn-sm float-right"> Ordenar </a>
				<div class="price-wrap h5">
					<span class="price-new">{{$product->price_unit}}</span>

				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div>
{!! $products->render() !!}
<!--container end-->
@endsection

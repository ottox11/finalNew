@extends('layouts.app')

@section('content')
@if (session()->has('status'))
<div class="alert alert-success" role="alert">{{ session('status')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
@endif

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
				<a href="/borrarCarrito/{{auth()->user()->id}}/{{$product->id}}" class="btn btn-primary btn-sm float-right"> Eliminar </a>
				<div class="price-wrap h5">
					<span class="price-new">{{$product->price_unit}}</span>

				</div> <!-- price-wrap.// -->
			</div> <!-- action-wrap -->
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->
@endforeach
</div>

@endsection

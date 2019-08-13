@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{!! asset('css/otto.css') !!}">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title></title>
  </head>

<div class="container-fluid">

  <!-- Navigation -->

  <!-- Mini Cart Starts Here -->
    <div class="mini-cart">
      <button class="btn btn-default mini-cart-button"><span class="glyphicon glyphicon-shopping-cart"></span></button>
    </div>
    <div class="mini-cart-container">
      <div class="mini-cart-items">
        <ul>
        </ul>
        <div class="mini-cart-totals">
          <div id="total-price">
            <p>Total Price</p>
            <span> $50.50 </span>
          </div>
          <div id="total-items">
            <p>Total Items</p>
            <span> 10 </span>
          </div>
        </div>
      </div>
    </div>
  <!-- Mini Cart Ends Here -->

  </div>

    <!-- Product Grid -->
    <div class="row product-grid">
         @foreach($products as $product)
      <!-- START The Product Item -->
      <div class="col-md-4 col-sm-4 grid-item">

        <img src="{{Storage::url($product->image)}}" class= "card-img-top-dimension" alt="" />
        <h1 class="product-title">{{$product->brand}}</h1>
        <h1 class="product-title">{{$product->product_name}}</h1>
        <h3 class="product-price">${{$product->price_unit}}</h3>
        <div class="quantity-input">
          <input class="minus btn" type="button" value="-">
          <input id="text_7_keto_dhea" value="1" class="input-text qty text" size="4"/>
          <input class="plus btn" type="button" value="+">
        </div>
        <button class="btn btn-success add-to-cart-button" rel="7_keto_dhea" product="7-Keto DHEA 100 mg" sel="12.99"><span class="glyphicon glyphicon-ok"></span> Add to Cart</button>
      </div>
      <!-- END!! The Product Item -->
      @endforeach

      <div class="succes-message">Item Succesfully Added to Cart</div>
    </div>

</div>

<script type="text/javascript" src="{!! asset('js/otto.js') !!}" async></script>

</div>

@endsection

</html>

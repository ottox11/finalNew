@extends('layouts.app')

@section('content')

<body>

<div class="container">

  <div class="container">
	<div class="row">
  		<div class="col-md-12">
   		<h1>Mundo Mascotas - Crear nuevo servicio</h1>
      	</div>
  	</div>



<div class="row">

  <div class="col-md-6">
  <form  action="/crearService" role="form" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

  <div class="form-group">
    <label for="service_name" class="loginFormElement">Nombre del servicio</label>
    <input class="form-control" name="service_name" value="{{ old('service_name') }}" id="servicename">
    <p class = "error_noti"> @if ($errors->has('service_name')) {{$errors->first(service_name)}} @endif</p>
  </div>

  <div class="form-group">
    <label for="address" class="loginFormElement">Dirección del servicio</label>
    <input class="form-control" name="address" value="{{ old('address') }}" id="address">
    <p class = "error_noti"> @if ($errors->has ('address')) {{$errors->first(addres)}} @endif</p>
  </div>

  <div class="form-group">
    <label for="email" class="loginFormElement">Email</label>
    <input class="form-control" name="email" value="{{ old('email') }}" id="email">
    <p class = "error_noti"> @if ($errors->has('email')) {{$errors->first('email')}} @endif</p>
  </div>

 <div class="form-group">
   <label for="contact_phone" class="loginFormElement">Teléfono de contacto</label>
   <input class="form-control" name="contact_phone" value="{{ old('contact_phone') }}" id="contactphone">
  <p class = "error_noti">@if ($errors->has('contact_phone')) {{$errors->first(contact_phone)}} @endif</p>
 </div>

 <div class="form-group">
   <label for="services_description" class="loginFormElement">Descripción del servicio</label>
   <input class="form-control" name="services_description" value="{{ old('services_description') }}" id="services_description">
   <p class = "error_noti"> @if ($errors->has('services_description')) {{$errors->first(services_description)}} @endif</p>
 </div>


<div class="form-group">

<label class="control-label">Imagen</label>

<input class="filestyle" data-icon="false" name="image" type="file">

</div>


    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Añadir servicio</button>

    </div></form>

    </div>

  </body>








  </div>

  <!-- /.container -->

<footer>
  <hr>
    <div class=" container text-right align-bottom">
    <p>Shopping Cart | © Copyright 2016, All Rights Reserved</p>
    </div>
</footer>
</div>
<div id="push">
</div>

</div>


@endsection

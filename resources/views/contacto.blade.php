@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Contáctate con nosotros</h1>
  <h3>Estamos para ayudarte</h3>
  <h6>Tenes consultas? no dudes en escribirnos y a la brevedad te contestaremos.</h6>
  <br>
  <br>
  <div class="row">

    <div class="col-md-6">
    <form  action="/contacto" role="form" method="post" enctype="multipart/form-data">
      {{csrf_field()}}

    <div class="form-group">
      <label for="nombre" class="loginFormElement">Nombre:</label>
      <input class="form-control" name="nombre" value="{{ old('nombre') }}" id="nombre">
      <p class="error_noti"> @if ($errors->has('nombre'))
  {{ $errors->first('nombre') }}
   @endif </p>
    </div>

   <div class="form-group">
     <label for="email" class="loginFormElement">Email:</label>
     <input class="form-control" name="email" value="{{ old('email') }}" id="email">
     <p class="error_noti"> @if ($errors->has('email'))
  {{ $errors->first('email') }}
  @endif </p>
   </div>

   <div class="form-group">
     <label for="asunto" class="loginFormElement">Asunto:</label>
     <input class="form-control" name="asunto" value="{{ old('asunto') }}" id="asunto">
     <p class="error_noti"> @if ($errors->has('asunto'))
  {{ $errors->first('asunto') }}
  @endif </p>
   </div>

<br>
<div class="form-group">
  <label for="mensaje" class="loginFormElement">Mensaje:</label>
<span class = "wpcf7-form-control-wrap your message">
<textarea name="mensaje" rows="8" cols="80" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
value="{{ old('mensaje') }}" id="mensaje" aria-required="true" aria-invalid="false" ></textarea>
</span>
<p class="error_noti"> @if ($errors->has('mensaje'))
{{ $errors->first('mensaje') }}
@endif </p>
</div>
      <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Enviar</button>

      </div>


    </form>


    </div>
<br><br><br><br><br>
    </body>








    </div>

</div>


@endsection

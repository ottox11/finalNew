@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
<div class="page-header">
<h3>
Busqueda de servicios
</h3>
<div class="formulario">
  {{Form::open(['route' => 'service.listado', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}

</div>
<div class="form-group">
{{Form::text('service_name', null, ['class' => 'form-control', 'placeholder'=> 'nombre del servicio'])}}
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
<br><br>
<h1>Lista de servicios</h1>
<div class="row">
  @foreach($service as $servic)
  <div class="col-md-3">
    <figure class="card card-servic">
    <div class="img-wrap">
      <img src="{{Storage::url($servic->image)}}" class="card-img-top-dimension">
    </div>
    <figcaption class="info-wrap">
      <h6 class="title text-dots">{{$servic->service_name}}</h6>
      <h6 class="title text-dots">{{$servic->contact_phone}}</h6>
      <h7 class="title text-dots">{{$servic->address}}</h7>
      <label class="title text-dots">{{$servic->services_description}}</label>
    </figcaption>
    <div class="card-footer">
      <small class="text-muted">Contactate para conocer más sobre el servicio</small>
    </div>
  </figure> <!-- card // -->
</div> <!-- col // -->

@endforeach
</div>
{{$service->render()}}
</div>
</div>
</div>


<br>










@endsection

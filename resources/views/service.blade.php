@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
<div class="page-header">

  <h1>Lista de servicios</h1>


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

</div>
</div>
<br><br>
<div class="row">
  <div class="card-columns">
    @foreach($service as $serv)
    <a href="{{ route('detalleServicio', $serv->id) }}">
    <div class="card p-3">
      <img class="card-img-top" src="{{Storage::url($serv->image)}}" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">{{$serv->brand}}</p>
        <h3 class="card-title">{{$serv->service_name}}</h3>
      </div>
    </div>
    </a>
    @endforeach
  </div>
</div>

{{$service->render()}}
</div>
</div>


<br>










@endsection

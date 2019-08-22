@extends('layouts.app')


@section('content')

    <div class="container">
    <br>  <h1 class="tituloLista">Opciones de Administrador</h1>
    <hr>

    @if (session()->has('status'))
    <div class="alert alert-success" role="alert">{{ session('status')}} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button></div>
    @endif

    @foreach($product as $prod)
    <ul class="list-unstyled">
    <li class="media">
      <img src="{{Storage::url($prod->image)}}" class="mr-3" id="imgMascota" alt="...">
      <div class="media-body">
        <h5 class="mt-0 mb-1">{{$prod->brand}}</h5>
        <p>{{$prod->product_name}}</p>
        <h4>${{$prod->price_unit}}</h4>
          <button href="{{ url('listaProducto') }}" onclick="" class="btn btn-primary">Eliminar </button>
          <button href="" class="btn btn-primary">Editar </button>
      </div>
    </li>

    </ul>
    @endforeach


    


@endsection

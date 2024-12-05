@extends('layouts.app')
@section('content')
<h1>LISTADO DE LIBROS</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">DESCRIPCION</th>
        <th scope="col">AUTOR</th>
        <th scope="col">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($libros as $libro)
        <td>{{$libro->nombre}}</td>
        <td>{{$libro->descripcion}}</td>
        <td>{{$libro->autor}}</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{$libro->id}}">ACTUALIZAR</button></td>
        @include('libros.actualizar')
      </tr>
        @endforeach
    </tbody>
  </table>
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session ('success')}}
  </div>
  @endif
@endsection
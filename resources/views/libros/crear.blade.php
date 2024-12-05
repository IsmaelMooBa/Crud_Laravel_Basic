@extends('layouts.app')
@section('content')
    <div class="card-body">
      <h5 class="card-title">Añadir un libro</h5>
      <form method="POST"  action="{{route('libros.store')}}">
        @csrf
        <div class="form-group">
            <label for="nombre">NOMBRE</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">DESCRIPCION</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="autor">AUTOR</label>
            <input type="text" id="autor" name="autor" class="form-control" required>
        </div>
        <button type="submit" class="form-control">GUARDAR</button>
      </form>
      @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session ('success')}}
      </div>
      @endif
    </div>
@endsection
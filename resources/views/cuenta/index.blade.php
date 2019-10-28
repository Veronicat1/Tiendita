@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Mi Cuenta</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Nombre</td>
          <td>Telefono</td>
          <td>Domicilio</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cuenta as $cuenta)
        <tr>
            <td>{{$cuenta->id}}</td>
            <td>{{$cuenta->nombre}}</td>
            <td>{{$cuenta->Telefono}}</td>
            <td>{{$cuenta->Domicilio}}</td>

            <td>
                <a href="{{ route('cuenta.edit',$cuenta->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('cuenta.destroy', $cuenta->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a class="btn btn-primary" href="#" role="button">En Ejecución</a> .
        <a class="btn btn-primary" href="#" role="button">Finalizados</a> |
        <a href="/empleados" >Lista De Empleados</a> |
        <a href="/nuevo-empleado" >Agregar Empleado</a> |
        <a href="/usuarios">Usuarios</a>
        <hr>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
            </div>
            <div class="container my-3">
            
            <table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">ID SERVICIO</th>
      <th scope="col">MARCA</th>
      <th scope="col">MATRICULA</th>
      <th scope="col">ID EMPLEADO</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidos as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->id_servicio}}</td>
      <td>{{ $p->marca}}</td>
      <td>{{ $p->matricula}}</td>
      <td>
      <a href="/asignar/{{$p->id}}">ASIGNAR EMPLEADO</a>
      </td>
    </tr>
    @endforeach
     </tbody>
     </table>
            
            <!--@foreach($pedidos as $p)
            
            {{ $p->id }}
            @endforeach-->
            </div>
        </div>
    </div>
</div>
@endsection

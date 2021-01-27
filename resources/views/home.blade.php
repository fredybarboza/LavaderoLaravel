@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
      <th scope="col">ID USUARIO</th>
      <th scope="col">SERVICIO</th>
      <th scope="col">MONTO</th>
      <th scope="col">ID EMPLEADO</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidos as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->id_usuario}}</td>
      <td>{{ $p->id_servicio}}</td>
      <td>{{ $p->monto}}</td>
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

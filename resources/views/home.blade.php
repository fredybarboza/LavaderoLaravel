@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a class="btn btn-primary" href="/pedidos" role="button">En Ejecución</a> .
        <a class="btn btn-primary" href="/finalizados" role="button">Finalizados</a> |
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
            
            @if($n!=null)
    <table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">SERVICIO</th>
      <th scope="col">MONTO</th>
      <th scope="col">MARCA</th>
      <th scope="col">MODELO</th>
      <th scope="col">MATRICULA</th>
      <th scope="col">ACCIÓN</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidos as $p)
    <tr>
      <td>{{$p->id}}</td>
      @switch($p->id_servicio)
      @case(1)
      <td>FULL</td>
      @break
      @case(2)
      <td>EXTERIOR+</td>
      @break
      @case(3)
      <td>EXTERIOR ECO</td>
      @break
      @case(4)
      <td>SEMI+</td>
      @break
      @case(5)
      <td>INTERIOR</td>
      @break
      @endswitch
      <td>{{$p->monto}}</td>
      <td>{{$p->marca}}</td>
      <td>{{$p->modelo}}</td>
      <td>{{$p->matricula}}</td>
      <td>
      <a class="btn btn-primary" href="/asignar/{{$p->id}}" role="button">Asignar Empleado</a>
      </td>
    </tr>
   @endforeach
     </tbody>
     </table>
  @else
  <div class="alert alert-primary" role="alert">
  No hay pedidos nuevos
</div>
  @endif
            
            
            </div>
        </div>
    </div>
</div>
@endsection

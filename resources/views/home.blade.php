@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
      <th scope="col">SERVICIO</th>
      <th scope="col">MONTO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidos as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
      <a href="/pedidos">ASIGNAR EMPLEADO</a>
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

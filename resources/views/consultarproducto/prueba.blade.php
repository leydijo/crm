@extends('layouts.app')

@section('title', 'Crear un Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header usuario titulo">Consultar Producto  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container ">
                            <form class="form-horizontal " action="producto" method="POST" id="">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <table class="table table-bordered  table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Abono</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Producto / Servicio</th>
                                            <th scope="col">Estado del pedido</th>
                                            <th scope="col">Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($getUserById->orders as $key => $order)
            
                                        <tr>
                                        <td>{{$getUserById->fullname}}</td>
                                        <td>${{( number_format($order->payment))}}</td>
                                        <td>{{$order->brand->name}}</td>
                                        <td>{{$getUserById->phone}}</td>
                                        <td>{{$order->product['name']}}</td>
                                        
                                            <td>    <select class="custom-select" id="inputGroupSelect01">
                                                       
                                                            {{-- <option value="{{$order['name']}}">{{$order->state_orders_id}}</option> --}}
                                                            <option value="{{$order->state_orders_id}}" id="estado">{{$order->name}}</option>
                                                            <option value="{{$order->state_orders_id}}">{{$getUserById->name}}</option>
                                                          
                                                    </select>
                                                
                                            </td>
                                            <td><button type="button" class="btn btn-info">Actualizar</button></td>
                                        </tr>

                                        @endforeach  
                                    </tbody>
                        
                                </table>
                            
                        </form>
                        </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>


    $("input[type=submit]").click(function(){
        var actualizar = $("#estado")
    })
</script>
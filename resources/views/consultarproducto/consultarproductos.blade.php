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
                        <div class="container " id="envio">
                            
                                <table class="table table-bordered  table-hover" id="consultarProducto">
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
                                    <form id="actualizar_producto" name="actualizar_producto">
                                        {{ csrf_field() }}
                                    <tbody>
                                        @foreach($getUserById->orders as $key => $order)
            
                                        <tr>
                                        {{-- <td  value="{{$order->id}}" id="id_order{{$key}}">{{$order->id}}</td> --}}
                                            <td>{{$getUserById->fullname}}</td>
                                            <td>{{($order->payment)}}</td>
                                            <td>{{$order->brand->name}}</td>
                                            <td>{{$getUserById->phone}}</td>
                                            <td>{{$order->product['name']}}</td>
                                            <td>    <select    name="ped" class="custom-select" id="estado_pedido{{$key}}" value="{{$order->id}}"  onchange="ajax_estado(this.value)" >
                                                        @foreach($estadopedido as $estado)
                                                            <option value="{{$estado->id}}" name="pedidos" selected="selected">{{$estado->name}}</option> 
                                                        @endforeach      
                                                    </select>
                                            </td>
                                                  <input type="hidden"  id="id_order{{$key}}" value="{{$order->id}}" /> 
                                                {{-- <td><button type="submit" id="update_pedido" class="btn btn-info">Actualizar</button></td> --}}
                                                
                                                
                                           
                                        </tr>

                                        @endforeach  
                                    </tbody>
                                  </form>
                                  
                                </table>
                            
                      
                        </div>
                  
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection




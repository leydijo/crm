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
                                    <tbody>
                                        @foreach($getUserById->orders as $key => $order)
            
                                        <tr>
                                            <td>{{$getUserById->fullname}}</td>
                                            <td>{{($order->payment)}}</td>
                                            <td>{{$order->brand->name}}</td>
                                            <td>{{$getUserById->phone}}</td>
                                            <td>{{$order->product['name']}}</td>
                                            <form class="form-horizontal" action="/consultar" method="post" id="actualizar_producto">
                                                {{ csrf_field() }}
                                            <td>    <select class="custom-select" id="estado_pedido" >
                                                        @foreach($estadopedido as $estado)
                                                         
                                                            <option value="{{$estado->id}}" selected="selected">{{$estado->name}}</option> 
                                                        @endforeach      
                                                    </select>
                                            </td>
                                                 {{-- <input type="hidden" name="button_action" id="button_action" value="insert" /> --}}
                                                <td><input type="submit"  name="submit"  id="update_pedido" value="Actualizar" class="btn btn-info" /></td>
                                                <div id="status"></div>
                                                
                                            </form>
                                        </tr>

                                        @endforeach  
                                    </tbody>
                        
                                </table>
                            
                      
                        </div>
                  
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection




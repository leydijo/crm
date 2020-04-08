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

                                            <td>{{$getUserById->fullname}}</td>
                                            <td>{{($order->payment)}}</td>
                                            <td>{{$order->brand->name}}</td>
                                            <td>{{$getUserById->phone}}</td>
                                            <td>{{$order->product['name']}}</td>

                                            <td>    <select  name="ped" class="custom-select"    onchange="ajax_estado(this.value, {{$order->id}})" >
                                                        @foreach($estadopedido as $estado)
                                                            <option value="{{$estado->name}}" name="pedidos" selected="selected">{{$estado->name}}</option>
                                                        @endforeach
                                                    </select>
                                            </td>

                                        <td><button href="#" class="btn btn-info">Cerrar Venta </button>   <a href="{{ route('ventas.pdf')}}" class="btn btn-info">Enviar Correo </a> </td>



                                        </tr>

                                        @endforeach
                                    </tbody>
                                  </form>
                                
                                </table>
                                <a type="button" href="{{ route('usuario.index') }}"><i class="fas fa-home fa-2x text-secondary" ></i></a>
                                <br>

                        </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection




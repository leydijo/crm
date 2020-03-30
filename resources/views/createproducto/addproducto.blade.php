@extends('layouts.app')

@section('title', 'Crear un Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header usuario titulo">Agregar Producto a {{$user->fullname}} </div>

                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>   
                    @endif
                        <div class="container ">
                           
                          <form class="form-group" action="/producto" method="POST" id="">
                            {{ csrf_field() }}
    
                             
                            <div class="form-group">
                              
                             <input type="hidden" class="form-control" value="{{$user->id}}" name="register_user_id" >
                             <input type="hidden" class="form-control" value="{{$user->id}}" name="orders_id" >
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Tipo de Producto</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="products_id" onchange=" mostrar(this.value);">
                                    <option selected>Seleccione...</option>
                                    @foreach ($productos as  $producto)
                                      <option value="{{$producto['id'] }}">{{ $producto ['name'] }}</option>
                                    @endforeach
    
                                </select>
                            </div>
    
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text " for="inputGroupSelect02">Marcas</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect02" name="brands_id">
                                    <option selected>Seleccione...</option>
                                    @foreach ($tipoMarcas as  $marcas)
                                      <option value="{{ $marcas['id'] }}">{{ $marcas['name'] }}</option>
                                    @endforeach 
                                </select>
                            </div>
    
    
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect03">Estado de tenis</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect03" name="state_tenis_id">
                                    <option selected>Seleccione...</option>
                                    @foreach ($estadoTenis as  $tenis)
                                      <option value="{{ $tenis['id'] }}">{{ $tenis['name'] }}</option>
                                    @endforeach 
                                 
                                   
                                </select>
                            </div>
                            
    
                            <div class="input-group  mb-3 ">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Abono</span>
                                  <span class="input-group-text">$</span>
                                </div>
                                <input type="number" class="form-control"  name="payment" aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
    
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">#</span>
                                <span class="input-group-text">Orden</span>
                              </div>
                              <input type="number" class="form-control" name="order_number" aria-label="Dollar amount (with dot and two decimal places)">
                          </div>
    
    
    
    
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">#</span>
                                  <span class="input-group-text">Referencia de Tenis</span>
                                </div>
                                <input type="text" class="form-control" name="reference" aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
    
                              <div class="input-group mb-3 ">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect04">Estado de Pedido</label>
                                  </div>

                                  <select class="custom-select" id="inputGroupSelect04" name="state_orders_id">
                                      {{-- <option selected>Seleccione...</option> --}}
                                      <option selected>Seleccione...</option>
                                      @foreach($estadoOrders as $pedido)
                                        <option value="{{$pedido->id}}">{{$pedido->name}}</option>
                                     @endforeach
                            
                                  </select>
                               </div> 

                 
                            <div class="form-group">
                                <label for="fechaentrega">Fecha de Entrega</label>
                                <input type="date" class="form-control" name="deliver_date" id="fechaentrega">
                            </div>
    
    
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-lg btn-info pull-right">Agregar</button>
                            </div>
                                
                          </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
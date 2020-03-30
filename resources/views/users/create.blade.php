@extends('layouts.app')

@section('title', 'Crear un Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header usuario titulo">Crear Usuarios</div>

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
                        <div class="container createuser">
                           
                            <form class="form-horizontal " action="/usuario" method="POST" id="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    
                                    <div class="col-md-8 d-flex">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-id-card fa-2x text-secondary"></i></span>
                                        <input  type="text" class="form-control" id="identification" name="identification" aria-describedby="emailHelp" placeholder="Cédula">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-md-8 d-flex">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-user fa-2x text-secondary"></i></span>
                                        <input type="text" class="form-control"  name="fullname" id="fullname"  placeholder="Nombres Comletos" >
                                    </div>
                                </div>
                                
                            
                                <div class="form-group">
                                    <div class="col-md-8 d-flex">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-map-marker-alt fa-2x text-secondary"></i></span>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Dirección">

                                    </div>
                                    
                                </div>
        
                                <div class="form-group">
                                    <div class="col-md-8 d-flex">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-birthday-cake fa-2x text-secondary"></i></span>
                                        <input type="date" class="form-control" name="birthday" id="birthday">
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 d-flex">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-map-marker-alt fa-2x text-secondary"></i></span>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="email">

                                    </div>
                                    
                                </div>
        
                                
                                <div class="form-group">
                                    <div class="col-md-8 d-flex">
                                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-mobile fa-2x text-secondary"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefono">
                                    </div>
                                  
                                    
                                </div>
        
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-lg btn-info pull-right">Crear Usuario</button>
                                </div> 
                                    
                              </form>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
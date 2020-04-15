@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 " >
            <div class="card ">
                <div class="card-header titulo">Listado de Usuarios</div>

                <div class="card-body ">
                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 

                    @include('flash::message')
                    <a href="{{ route('usuario.create') }}" ><i class="fas fa-user-plus fa-2x text-secondary"></i></a><hr><br>
                    <!-- buscardor -->
                    <form action="{{ route('usuario.index') }}" class="form-inline mr-2 mr-lg-0" method="get" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control mr-sm-2" name="c" placeholder="Search users"> <span
                                class="input-group-btn">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </span>
                        </div>
                    </form>
                    <!-- fin del buscardor -->

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Completos</th>
                            <th scope="col">Identificación</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Cumpleaños</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($users as $user)
                          
                            <tr> 
                                <td>{{$user->id}}</td>
                                <td>{{$user->fullname}}</td>
                                <td>{{$user->identification}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->birthday}}</td>
                                <td>{{$user->phone}}</td>
                               <td><a type="button" href="{{ route('usuario.edit', $user->id) }}"  class="btn btn-success">Editar</a> 
                                <a type="button" href="{{ asset('producto/create') }}?user={{$user->id}}"  class="btn btn-warning">Crear Servicio </a>
                                <a type="button" href="{{ route('producto.index') }}?user={{$user->id}} " class="btn btn-info">Consultar Pro </a> 
                               
                            </td>
                               
                                
                            </tr>
                           
                            @endforeach
                           
                            
                        </tbody>
                        
                      </table>
                    
            
                        {!!$users->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">

        @if(Session::has('mensaje'))
        {{Session::get('mensaje') }}
        @endif


        <a href="{{url('/RegistroUsuarios/create')}}" class="btn btn-success"> Registrar Nuevo Usuario</a>

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>celular</th>
                    <th>cedula</th>
                    <th>email</th>
                    <th>categorias</th>
                    <th>acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id}}</td>
                        <td>{{ $usuario->nombre}}</td>
                        <td>{{ $usuario->apellido}}</td>
                        <td>{{ $usuario->celular}}</td>
                        <td>{{ $usuario->cedula}}</td>
                        <td>{{ $usuario->email}}</td>
                        <td>{{ $usuario->id_categorias}}</td>
                        <td> 
                            <a href="{{url('/RegistroUsuarios/'.$usuario->id.'/edit')}}">
                                Editar /

                            </a>
                            
                            <form action="{{url('/RegistroUsuarios/'.$usuario->id)}}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                                <input type="submit" onclick ="return confirm('quieres borrar?')"value="Borrar">
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>


        
    </div>
    
@endsection


@extends('layouts.app')
@section('content')
<div class="container">

    <form action="{{url('/RegistroUsuarios/'.$datosUsuarios->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('registroUsuarios.form',['modo'=> 'Modificar'])
        
        
    </form>





</div>
@endsection



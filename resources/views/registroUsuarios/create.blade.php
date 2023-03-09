
@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{url('/RegistroUsuarios')}}" method="POST">
        @csrf
        @include('registroUsuarios.form',['modo'=> 'Ingresar'])

    </form>

</div>
@endsection

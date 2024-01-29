@extends('layouts.public')
@section('content')

    <h2  style="text-align: center">Detalle de peticiones</h2>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <table>

        <tr>Id: {{$peticion->id}}</tr>                          <br>
        <tr>Titulo: {{$peticion->titulo}}</tr>                      <br>
        <tr>Descripción: {{$peticion->descripcion}}</tr>                 <br>
        <tr>Destinatarios: {{$peticion->destinatario}}</tr>                <br>
        <tr>Firmantes: {{$peticion->firmantes}}</tr>                   <br>
        <tr>Estado: {{$peticion->estado}}</tr>                      <br>
        <tr>Categoria: {{$peticion->categoria_id}}</tr>                      <br>

    <div class="corgi-laa4dmu">
        <a href="{{route('peticiones.firmar', $peticion->id)}}"
           class="btn btn-success" onclick="event.preventDefault(); document.getElementById('firma-id').submit();">Firmar</a>
        <form id="firma-id" action="{{route('peticiones.firmar', $peticion->id)}}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </table>
@endsection

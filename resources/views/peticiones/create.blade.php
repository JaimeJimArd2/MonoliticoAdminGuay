@extends('layouts/public')
@section('content')
    <h2>Iniciar una peticion</h2>
    <form method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
        Nombre: <input type="text" name="Nombre" id="nombre"><br>
        Descripción: <input type="text" name="Descripcion" id="descripcion"><br>
        Categoría: <input type="text" name="Categoría" id="categoria"><br>
        <input type="submit" value="Enviar Petición">
    </form>
@endsection

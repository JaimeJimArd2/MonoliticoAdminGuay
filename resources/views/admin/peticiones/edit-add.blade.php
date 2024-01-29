@extends('layouts/admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Peticion</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.peticiones.update', $peticion->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Aquí debes incluir los campos específicos de tu modelo Peticion -->
                            <div class="form-group">
                                <label for="titulo">Título:</label>
                                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $peticion->titulo) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" required>{{ old('descripcion', $peticion->descripcion) }}</textarea>
                            </div>

                            <!-- Agrega los demás campos según sea necesario -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

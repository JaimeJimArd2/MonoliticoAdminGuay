@extends('layouts/public')
@section('content')
    <h2>Descubrir Peticiones</h2>
    <div class=" mx-auto p-5" style="border: 1px solid black; width: 40%">
        @foreach($peticiones as $peticion)
            <div class="d-flex mb-3">
                <div class="w-75 d-flex flex-column">
                    <div class="h-75 w-100">
                        <h4>{{ $peticion->titulo }}</h4>
                        <p>{{ $peticion->descripcion }}</p>
                    </div>
                    <div class="h-25 d-flex justify-content-between pe-5" style="align-items: end">
                        <p><strong>Firmantes:</strong> {{ $peticion->firmantes }}</p>
                        <p class="ml-3"><strong>Estado:</strong> {{ $peticion->estado }}</p >
                    </div>
                </div>
                <div class="w-25">
                    <div class="d-block" style="height: 10rem; background-size: cover; background-position: center; background-image: url('{{ asset('/peticiones/'.$peticion->files()->first()->name) }}'); width: 100%;">

                    </div>
                    <a href="{{ route('peticiones.show', $peticion->id) }}" class="btn btn-danger d-block mt-2">Ver</a>
                </div>
            </div>
        @endforeach
            {!! $peticiones->links() !!}

    </div>
@endsection

@extends('layouts.app')

@section('template_title')
    Piloto
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo text-center mb-4">{{ __('Pilotos') }}</h1>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Crea un nuevo piloto') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('pilotos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nuevo piloto') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            @forelse ($pilotos as $piloto)
                                <div class="col-md-3">
                                    <div class="card h-100 mb-4">
                                        <img src="{{ $piloto->img_piloto ? asset('imagenes/pilotos/' . $piloto->img_piloto) : 'https://via.placeholder.com/300' }}"
                                            class="card-img-top" alt="Imagen del Piloto {{ $piloto->nombre }}"
                                            style="max-width: 300px; max-height: 300px;">
                                        <div class="card-body d-flex flex-column">
                                            <h1 class="card-title">{{ $piloto->nombre }}</h1>
                                            <h1 class="card-title">{{ $piloto->apellido }}</h1>
                                            <p class="card-text fs-4">Escuderia: {{ $piloto->escuderia->nombre }}</p>
                                            <p class="card-text fs-4">Nacionalidad: {{ $piloto->nacionalidad }}</p>
                                            <p class="card-text fs-4">Dorsal: {{ $piloto->dorsal }}</p>
                                            <div class="d-grid gap-2 mt-auto">
                                                <a href="{{ route('pilotos.show', $piloto->id) }}"
                                                    class="btn btn-primary btn-sm">Mostrar</a>
                                                <a href="{{ route('pilotos.edit', $piloto->id) }}"
                                                    class="btn btn-success btn-sm">Editar</a>
                                                <form action="{{ route('pilotos.destroy', $piloto->id) }}" method="POST"
                                                    class="d-grid">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-12 text-center">
                                    <p>No hay pilotos disponibles</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                {!! $pilotos->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('template_title')
    Escuderia
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titulo text-center mb-4">{{ __('Escuderias') }}</h1>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Crea una nueva escuderia') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('escuderias.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nueva escuderia') }}
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
                            @forelse ($escuderias as $escuderia)
                                <div class="col-md-3">
                                    <div class="card h-100 mb-4 d-flex flex-column">
                                        <img src="{{ $escuderia->logo ? asset('imagenes/escuderias/' . $escuderia->logo) : 'https://via.placeholder.com/300' }}"
                                            class="card-img-top flex-fill"
                                            alt="Logo de la Escudería {{ $escuderia->nombre }}"
                                            style="max-width: 300px; height: 200px;">
                                        <div class="card-body d-flex flex-column flex-fill">
                                            <h1 class="card-title">{{ $escuderia->nombre }}</h1>
                                            <p class="card-text fs-4 flex-fill">Nacionalidad: {{ $escuderia->nacionalidad }}
                                            </p>
                                            <div class="d-grid gap-2 mt-auto w-100">
                                                <a href="{{ route('escuderias.show', $escuderia->id) }}"
                                                    class="btn btn-primary btn-sm">Mostrar</a>
                                                <a href="{{ route('escuderias.edit', $escuderia->id) }}"
                                                    class="btn btn-success btn-sm">Editar</a>
                                                <form action="{{ route('escuderias.destroy', $escuderia->id) }}"
                                                    method="POST" class="d-grid">
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
                                    <p>No hay escuderías disponibles</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                {!! $escuderias->links() !!}
            </div>
        </div>
    </div>
@endsection

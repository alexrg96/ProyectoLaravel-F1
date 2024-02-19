@extends('layouts.app')

@section('template_title')
    {{ $escuderia->name ?? "{{ __('Show') Escuderia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Escuderia</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $escuderia->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $escuderia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $escuderia->nacionalidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

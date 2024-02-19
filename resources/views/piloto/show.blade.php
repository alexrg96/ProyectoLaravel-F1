@extends('layouts.app')

@section('template_title')
    {{ $piloto->name ?? "{{ __('Show') Piloto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Piloto</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Escuderia Id:</strong>
                            {{ $piloto->escuderia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Img Piloto:</strong>
                            {{ $piloto->img_piloto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $piloto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $piloto->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $piloto->nacionalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Dorsal:</strong>
                            {{ $piloto->dorsal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

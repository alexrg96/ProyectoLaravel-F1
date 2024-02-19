<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('escuderia_id') }}
            {{ Form::select('escuderia_id', $escuderias, $piloto->escuderia_id, ['class' => 'form-control' . ($errors->has('escuderia_id') ? ' is-invalid' : ''), 'placeholder' => 'Escuderia Id']) }}
            {!! $errors->first('escuderia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img_piloto') }}
            {{ Form::text('img_piloto', $piloto->img_piloto, ['class' => 'form-control' . ($errors->has('img_piloto') ? ' is-invalid' : ''), 'placeholder' => 'Img Piloto']) }}
            {!! $errors->first('img_piloto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $piloto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $piloto->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacionalidad') }}
            {{ Form::text('nacionalidad', $piloto->nacionalidad, ['class' => 'form-control' . ($errors->has('nacionalidad') ? ' is-invalid' : ''), 'placeholder' => 'Nacionalidad']) }}
            {!! $errors->first('nacionalidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dorsal') }}
            {{ Form::text('dorsal', $piloto->dorsal, ['class' => 'form-control' . ($errors->has('dorsal') ? ' is-invalid' : ''), 'placeholder' => 'Dorsal']) }}
            {!! $errors->first('dorsal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

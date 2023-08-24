<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $foroall->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('contenido') }}
    {{ Form::textarea('contenido', $foroall->contenido, ['class' => 'form-control' . ($errors->has('contenido') ? ' is-invalid' : ''), 'placeholder' => 'Contenido']) }}
    {!! $errors->first('contenido', '<div class="invalid-feedback">:message</div>') !!}
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
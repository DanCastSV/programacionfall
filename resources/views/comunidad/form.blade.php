<div class="box box-info padding-1">
<div class="d-grid gap-2">
 
 <a href="{{ route('comunidad.index') }}" class="btn btn-secondary"  data-placement="left">
   {{ __('Volver') }}
 </a>
 </div>
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $comunidad->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lenguaje') }}
            {{ Form::text('lenguaje', $comunidad->lenguaje, ['class' => 'form-control' . ($errors->has('lenguaje') ? ' is-invalid' : ''), 'placeholder' => 'Lenguaje']) }}
            {!! $errors->first('lenguaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            <br>
            {{ Form::textarea('descripcion', $comunidad->descripcion, ['class' => 'form-label' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'rows' => '3']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-success">{{ __('Publicar') }}</button>
    </div>
   

               

</div>


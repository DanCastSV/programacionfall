@extends('layouts.app')

@section('template_title')
    {{ $comunidad->name ?? "{{ __('Show') Comunidad" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Post</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-dark" href="{{ route('comunidad.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $comunidad->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Lenguaje:</strong>
                            {{ $comunidad->lenguaje }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $comunidad->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

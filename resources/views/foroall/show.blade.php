@extends('layouts.app')

@section('template_title')
    {{ $foroall->name ?? "{{ __('Show') Foroall" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Foroall</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('foroalls.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $foroall->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $foroall->contenido }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    Asking
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consultas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asking.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear consultas') }}
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
                  
                          
                                    @foreach ($askings as $asking)
                                    <div class="card" style="width: 93rem; " >
  <div class="card-body">
    <div align = "center"><h5 class="card-title">Titulo: {{ $asking->titulo }}</h5></div>
    <p class="card-text">{{ $asking->descripcion }}</p>
 
    
  </div>
</div>
                                    @endforeach
                              
                        </div>
                    </div>
                </div>
                {!! $askings->links() !!}
            </div>
        </div>
    </div>
@endsection

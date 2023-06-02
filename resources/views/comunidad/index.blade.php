@extends('layouts.app')
<style>
    /* Estilos para el footer */
    footer {
      background-color: #2e2f30;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #666;
    }
  </style>

@section('template_title')
    Comunudad
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comunidad') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comunidad.create') }}" class="btn btn-outline-dark"  data-placement="left">
                                  {{ __('Crear post') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                                    @foreach ($comunidads as $comunidad)
                                    <div class="card" style="width: 93rem; " >
  <div class="card-body">
    <div align = "center"><h5 class="card-title">Titulo: {{ $comunidad->titulo }}</h5></div>
    <h6 class="card-subtitle mb-2 text-body-secondary">Lenguaje: {{ $comunidad->lenguaje }}</h6>
    <p class="card-text">{{ $comunidad->descripcion }}</p>
    <a class="card-link " href="{{ route('comunidad.show',$comunidad->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más.') }}</a>
    
  </div>
</div>
                                    @endforeach
                            
                            
                       
                        </div>
                    </div>
                </div>
                {!! $comunidads->links() !!}
            </div>
        </div>
    </div>

    <footer>
    <p>Programación para todos 2023.</p>
</footer>
@endsection

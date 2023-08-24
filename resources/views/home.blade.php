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

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark bg-light mb-3">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div align="center"><h1>Bienvenido a programación para todos </h1>
                     <p>
                     ¡Bienvenido a la app "Programación para Todos"!

                     Nos complace darte la más cordial bienvenida a nuestra plataforma educativa, diseñada especialmente para aquellos apasionados por la programación y aquellos que desean adentrarse en el fascinante mundo de la codificación. <br>
                     <br>
                     Aquí en "Programación para Todos", creemos firmemente que la programación no debería ser un privilegio exclusivo de unos pocos, sino una habilidad accesible y enriquecedora para todos. Nuestro objetivo es brindarte las herramientas necesarias para que te conviertas en un experto en programación, sin importar tu nivel de experiencia previa. <br>
                     <br>
                       En esta app encontrarás una amplia gama de recursos interactivos, tutoriales y proyectos prácticos que te guiarán paso a paso en tu aprendizaje. Desde los conceptos básicos hasta las técnicas más avanzadas, te acompañaremos en cada etapa de tu viaje de aprendizaje. <br>
                      <br>
                       </p>
                     </div>

                      </div>
                      <div class="d-grid gap-2">
 
                 <a href="{{ route('comunidad.index') }}" class="btn btn-outline-dark"  data-placement="left">
   {{ __('Ir a comunidad en linea') }}
 </a>
 </div>
 <br>
 <p>         </p>
 <br>
 <br>

 <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.eniun.com/wp-content/uploads/evolucion-lenguajes-programacion-mas-utilizados-actualidad.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.grupoioe.es/wp-content/uploads/2019/12/lenguajes-programacion-1024x494.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://miro.medium.com/v2/resize:fit:1040/1*QtaZbWHG6xWe-dHwFIQFmA.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
             </div>
        </div>
    </div>

   
</div>

<footer>
    <p>Programación para todos 2023.</p>
  
</footer>
@endsection

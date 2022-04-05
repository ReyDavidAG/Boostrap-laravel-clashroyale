@extends('plantilla')
@section('content')

<main class="bg-ligth" style="flex: 1 0 auto; background-color: #F5F4F1;">
      <container class="bg-dark">
        <div class="container-xl $yellow-500">
          <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/cumpleanos.jpg" class="d-block w-100" alt="..." width="1980px" height="720px">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="text">6to aniversario</h5>
                      <p>Celebra jugando con nosotros.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/campeones.jpg" class="d-block w-100" alt="..." width="1980px" height="720px">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><strong>Campeones</strong></h5>
                      <p>Ven y pruba los nuevos heroes, ya disponibles.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/principal.png" class="d-block w-100" alt="..." width="1980px" height="720px">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Creadores</h5>
                      <p>Apoya a tu creador favorito ingresando su codigo.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
      
              
        </div>
          <br>
          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card mb-3 col-lg-12">
              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                  <img src="img/n1.0.jpg" class="img-fluid rounded-start" alt="..." width="500px" height="500px">
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                  <div class="card-body">
                    <h5 class="card-title">Pausa de mantenimiento</h5>
                    <p class="card-text">Pronto haremos una pausa de mantenimiento para optimizar el sistema y así mejorar el backend para Clash Royale.</p>
                    <p class="card-text"><small class="text-muted">16/03/2022</small></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 col-lg-12">
              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                  <img src="img/n2.png" class="img-fluid rounded-start" alt="..." width="500px" height="500px">
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                  <div class="card-body">
                    <h5 class="card-title">¡El inicio de sesión con Facebook caducará!</h5>
                    <p class="card-text">Debido a razones técnicas, el inicio de sesión con Facebook expirará pronto y no podremos seguir dando soporte a esta función. Para seguir jugando con tus amigos de Facebook, conéctate con ellos a través de la Supercell ID.</p>
                    <p class="card-text"><small class="text-muted">16/03/2022</small></p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
            
          </div>
        </div>
    </container>
    </main>

@endsection
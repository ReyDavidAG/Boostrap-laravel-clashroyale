@extends('plantilla')
@section('content')

<main class="bg-$gray-400" style="flex: 1 0 auto; background-color: #F5F4F1  ; ">
      <container class="bg-$gray-400">
        <div class="">
          <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                    <img src="img/asistencia2.jpg" class="d-block w-100" alt="..." width="1980px" height="720px" style="perspective: 1000px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h1 class="text">Recuperar tu cuenta</h1>
                      <p>Has perdido tu cuenta, te ayudamos a recuperarla.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/asistencia1.jpg" class="d-block w-100" alt="..." width="1980px" height="720px" style="perspective: 1000px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h1><strong>Campeones</strong></h1>
                      <p>Ven y pruba los nuevos heroes, ya disponibles.</p>
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
        <br><br>
          <div class="container-lg">
            <div class="row">
              
              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="cotainer"> 
                  <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-2 col-lg-2 col-sm-12 ">
                        <img src="img/cuenta.png" class="img-fluid rounded-start " style="padding-left: 40%;" alt="...">
                      </div>
                      <div class="col-md-10 col-lg-10">
                        <div class="card-body">
                          <h4 class="card-title fw-bold">MI CUENTA</h4>
                          <p class="card-text"><small class="text-muted">Tienes problemas con tu cuenta?</small></p>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/someone-else-is-playing-my-account.html">Otra persona esta jugando con mi cuenta!</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/what-is-gdpr.html">Acerca del RGPD</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/gdpr-request-deletion-of-your-personal-data.html">Solicitar la eliminacion de tus datos personales</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="cotainer"> 
                  <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-2 col-lg-2 col-sm-12">
                        <img src="img/compras.png" class="img-fluid rounded-start" style="padding-left: 40%;" alt="...">
                      </div>
                      <div class="col-md-10 col-lg-10">
                        <div class="card-body">
                          <h4 class="card-title fw-bold">COMPRAS</h4>
                          <p class="card-text"><small class="text-muted ">Ayuda con las compras integradas</small></p>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/purchases-i-didnt-get-my-apple-ios-purchase.html">No he recibido mi compra de IOS!</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/personalised-shop.html">Tienda personalizada</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/adding-and-removing-payment-methods-on-ios.html">Metodos de pago (IOS)</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="cotainer"> 
                  <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-2 col-lg-2 col-sm-12">
                        <img src="img/funcionamiento del juego.png" class="img-fluid rounded-start" style="padding-left: 40%;" alt="...">
                      </div>
                      <div class="col-md-10 col-lg-10">
                        <div class="card-body">
                          <h4 class="card-title fw-bold">FUNCIONAMIENTO DEL JUEGO</h4>
                          <p class="card-text"><small class="text-muted">Como jugar</small></p>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/how-to-disable-notifications.html">Como desactivar las notificaciones</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/how-to-change-your-username.html">Como cambiar tu nombre de usuario</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/maintenance-breaks.html">Pausas de mantenimiento</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="cotainer"> 
                  <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-2 col-lg-2 col-sm-12">
                        <img src="img/Resolucion de problemas.png" class="img-fluid rounded-start" style="padding-left: 40%;" alt="...">
                      </div>
                      <div class="col-md-10 col-lg-10">
                        <div class="card-body">
                          <h4 class="card-title fw-bold">RESOLUCION DE PROBLEMAS</h4>
                          <p class="card-text"><small class="text-muted">Informes de errores y asistencia</small></p>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/unstable-connection.html">Conexion inestable</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/how-do-i-reinstall-the-game.html">Como reinstalo el juego</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/sending-bug-reports.html">Denunciar errores en el juego</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="cotainer"> 
                  <div class="card mb-3" >
                    <div class="row g-0">
                      <div class="col-md-2 col-lg-2 col-sm-12">
                        <img src="img/juego limpio.png" class="img-fluid rounded-start" style="padding-left: 40%;" alt="...">
                      </div>
                      <div class="col-md-10 col-lg-10">
                        <div class="card-body">
                          <h4 class="card-title fw-bold">JUEGO LIMPIO Y SEGURO</h4>
                          <p class="card-text"><small class="text-muted">Juega con respeto</small></p>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/someone-else-is-playing-my-account.html">Otra persona esta jugando con mi cuenta!</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/fair-play-what-is-safe-and-fair-play.html">Que es el juego limpio y seguro?</a>
                          <a class="nav-link text-blue fw-bold" style="padding: 2px;" href="https://help.supercellsupport.com/clash-royale/es/articles/fair-play-dont-be-a-cheat.html">No hagas trampas!</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
          </div>

          <div class="card mb-3" >
            <div class="row g-0">
              
              <div class="col-md-5">
                <div class="card-body" >
                  <h3 class="card-title fw-bold text-center" style="padding-top: 20%;">PROTEGE TU CUENTA</h3>
                  <p class="card-text text-center"><small class="text-muted"> Conecta tu juego con Supercell ID!</small></p>
                  <a class="nav-link text-center" style="padding: 2px;" href="https://youtu.be/_CV4c05Tquc">Mas informacion > </a>
                </div>
              </div>
              <div class="col-md-7">
                <img src="img/supercellid.jpg" class="img-fluid rounded-start" alt="...">
              </div>
            </div>
          </div>
        
    </container>
    </main>

@endsection
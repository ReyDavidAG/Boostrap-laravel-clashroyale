<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('p')}}">
                  <img src="img/clash royale.png" alt="clash royale" width="100px">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('p')}}">Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('i')}}">Informacion del juego</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('a')}}">Asistencia</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success text-white bg-$grey-100" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
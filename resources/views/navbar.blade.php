<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand d-md-none" href="#">
      <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
      Aperture
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Aperture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 justify-content-between">
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"/></svg>
          </a></li>
          <li class="nav-item"><a class="dropdown-item" href="{{route('novoAutor')}}">Cadastrar novo filme</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Cadastrar roteirista</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Cadastrar ator</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Pesquisa</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Listar filmes</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Listar roteiristas</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Listar atores</a></li>
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
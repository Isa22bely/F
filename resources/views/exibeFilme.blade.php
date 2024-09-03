@extends('layout')
@section('content')
<div class="container py-4">
    <div class="card border">
        <div class="card-body">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="mt-5 text-center">Editar Filme</h1>
                </div>
            </div>
            <form action="/filme/{{$dados->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título: </label>
                    <input type="text" class="form-control" name="titulo" value="{{$dados->Titulo}}">
                </div>
                <div class="form-group">
                    <label for="ano">Ano de lançamento: </label>
                    <input type="text" class="form-control" name="ano" value="{{$dados->Ano}}">
                </div>
                <div class="form-group">
                    <label for="duracao">Duração do filme(minutos): </label>
                    <input type="text" class="form-control" name="duracao" value="{{$dados->Duracao}}">
                </div>
                <div class="form-group">
                    <label for="idioma">Idioma: </label>
                    <input type="text" class="form-control" name="idioma" value="{{$dados->Idioma}}">
                </div>
                <div class="form-group">
                    <label for="imdb">IMDB: </label>
                    <input type="text" class="form-control" name="imdb" value="{{$dados->IMDB}}">
                </div>

                <div class="form-group">
                    <label for="pais">País: </label>
                    <input type="text" class="form-control" name="pais" value="{{$dados->Pais}}">
                </div>
                <div class="form-group">
                    <label for="sinopse">Sinopse: </label>
                    <input type="text" class="form-control" name="sinopse" value="{{$dados->Sinopse}}">
                </div>

                <div class="form-group">
                    <label for="claisificacao_indicativa">Selecione a classificação indicativa do Filme: </label>
                    <select class="form-control" name="claisificacao_indicativa" id="claisificacao_indicativas" required>
                        @foreach ($claisificacao_indicativa as $item)
                        @if($dados->ClassificacaoIndicativa_id == $item->id)
                        <option selected="selected" value="{{$item->id}}">{{$item->Descricao}}</option>
                        @else
                        <option value="{{$item->id}}">{{$item->Descricao}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>



                <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
                <button onclick="window.location.href='{{route('inicio')}}';" type="button"
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<hr>
@endsection
<!-- 


    <div class="row mb-2">
        CARDS
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-body-secondary">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    @ 2 CARDES 


<div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-body-secondary">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-body-secondary">Nov 11</div>
          <p class="mb-@extends('layout')
@section('content')auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
  </div>







  Navegação


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
          <li class="nav-item"><a class="nav-link" href="#">Tour</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Enterprise</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#cart"/></svg>
          </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
      -->
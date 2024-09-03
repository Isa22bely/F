@extends('layout')
@section('content')
<div class="container py-4">
    <div class="card border">
        <div class="card-body">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="mt-5 text-center">Editar filme</h1>
                </div>
            </div>
            <form action="/filme/{{$dados->id" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título: </label>
                    <input type="text" class="form-control" name="titulo" value ="{{$dados->Titulo}}">
        </div>
        <div class="form-group">
            <label for="ano">Ano de lançamento: </label>
            <input type="text" class="form-control" name="ano" value ="{{$dados->AnoLancamento}}">
        </div>

        <div class="form-group">
            <label for="duracao">Duração do filme(minutos): </label>
            <input type="text" class="form-control" name="duracao" value ="{{$dados->Duracao}}">
        </div>

        <div class="form-group">
            <label for="idioma">Idioma: </label>
            <input type="text" class="form-control" name="idioma" value ="{{$dados->Idioma}}">
        </div>

        <div class="form-group">
            <label for="imdb">IMDB: </label>
            <input type="text" class="form-control" name="imdb" value ="{{$dados->IMDB}}">
        </div>
        <div class="form-group">
            <label for="pais">País: </label>
            <input type="text" class="form-control" name="pais" value ="{{$dados->Pais}}">
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse: </label>
            <input type="text" class="form-control" name="sinopse" value ="{{$dados->Sinopse}}">
        </div>
        <div class="form-group">
            <label for="claisificacao_indicativa">Selecione a classificação indicativa do filme</label>
            <select class="form-control" name="claisificacao_indicativa" id="claisificacao_indicativas" required>
                @foreach ($clasificacao_indicativa as $item)
                    @if($dados->ClassificacaoIndicativa_id == $item->id)
                        <option value="{{$item->id}}">{{$item->Titulo}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->Titulo}}</option>
                    @endif
                @endforeach
            </select>
        </div>
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
</div>
</div>


</div>
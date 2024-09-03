@extends('layout')
@section('content')
<div class="container py-4">
    <div class="card border">
        <div class="card-body">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="mt-5 text-center">Cadastre um novo filme</h1>
                </div>
            </div>
            <form action="{{route('GravarNovoFilme')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título: </label>
                    <input type="text" class="form-control" name="titulo" placeholder="Informe o título do filme">
                </div>
                <div class="form-group">
                    <label for="ano">Ano de lançamento: </label>
                    <input type="text" class="form-control" name="ano"
                        placeholder="Informe o ano do lançamento do filme">
                </div>

                <div class="form-group">
                    <label for="duracao">Duração do filme(minutos): </label>
                    <input type="text" class="form-control" name="duracao"
                        placeholder="Informe a duração do filme em minutos">
                </div>

                <div class="form-group">
                    <label for="idioma">Idioma: </label>
                    <input type="text" class="form-control" name="idioma" placeholder="Informe o idioma do filme">
                </div>

                <div class="form-group">
                    <label for="imdb">IMDB: </label>
                    <input type="text" class="form-control" name="imdb" placeholder="Informe o IMDB do filme">
                </div>
                <div class="form-group">
                    <label for="pais">País: </label>
                    <input type="text" class="form-control" name="pais"
                        placeholder="Informe o país onde o filme foi feito">
                </div>
                <div class="form-group">
                    <label for="sinopse">Sinopse: </label>
                    <input type="text" class="form-control" name="sinopse" placeholder="Informe a sinopse do filme">
                </div>
                <div class="form-group">
                    <label for="claisificacao_indicativa">Selecione a classificação indicativa do filme</label>
                    <select class="form-control" name="claisificacao_indicativa" id="claisificacao_indicativa" required>
                        @foreach ($clasificacao_indicativa as $item)
                        <option value="{{$item->id}}">{{$item->TituloClassificacao}}</option>
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
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica extends Model
{
    use HasFactory;
    protected $fillable = ['Titulo', 'Biografia', 'Ano', 'Duracao', 'Idioma', 'IMDB', 'Pais', 'Sinopse', 'ClassificacaoIndicativa_id', 'Comentario_id'];
    public function fichaTecnica_ators(){
        return $this->hasMany('App\Models\FichaTecnicaAtor', 'FichaTecnica_id');
    }

    public function fichaTecnica_diretors(){
        return $this->hasMany('App\Models\FichaTecnicaDiretor', 'FichaTecnica_id');
    }

    public function fichaTecnica_roteiristas(){
        return $this->hasMany('App\Models\FichaTecnicaRoteirista', 'FichaTecnica_id');
    }

    public function classificacao_indicatica(){
        return $this->belonngsTo('App\Models\ClaisificacaoIndicativa');
    }

    public function comentario(){
        return $this->belonngsTo('App\Models\Comentario');
    }
}
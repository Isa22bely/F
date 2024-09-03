<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica_Diretor extends Model
{
    use HasFactory;
    protected $fillable = ['Diretor_id', 'FichaTecnica_id'];
    public function diretor(){
        return $this->belongsTo('App\Models\Diretor');
    }
    public function ficha_tecnica(){
        return $this->belongsTo('App\Models\FichaTecnica');
    }
}

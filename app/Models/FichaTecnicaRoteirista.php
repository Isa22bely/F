<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnicaRoteirista extends Model
{
    use HasFactory;
    protected $fillable = ['Roteirista_id', 'FichaTecnica_id'];
    public function roteirista(){
        return $this->belongsTo('App\Models\Roteirista');
    }
    public function ficha_tecnica(){
        return $this->belongsTo('App\Models\FichaTecnica');
    }
}

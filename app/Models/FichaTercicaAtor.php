<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichaTecnica_Ator extends Model
{
    use HasFactory;
    protected $fillable = ['Ator_id', 'FichaTecnica_id'];
    public function ator(){
        return $this->belongsTo('App\Models\Ator');
    }
    public function ficha_tecnica(){
        return $this->belongsTo('App\Models\FichaTecnica');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function operaciones(){
        return $this->belongsToMany(Operacion::class);
    }
}

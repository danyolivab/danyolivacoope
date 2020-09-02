<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    public function asociado(){
        return $this->belongsTo(Asociado::class);
    }

    public function productos(){
        return $this->belongsToMany(Producto::class);
    }
}

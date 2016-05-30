<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = 'factura';
    protected $fillable = ['fecha_factura', 'descripcion', 'valor_total', 'solicitud_renta_id'];

    public function solicitud_renta(){
  		return $this->belongsTo('App\solicitud_renta');
    }
}

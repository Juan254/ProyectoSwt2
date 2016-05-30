<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud_renta extends Model
{
    protected $table = 'solicitud_renta';
    protected $fillable= ['fecha_renta', 'hora_renta','user_id', 'vehiculo_id'];


   public function user(){
   		return $this->belongsTo('App\User');
   }

   public function vehiculo(){
   	return $this->belongsTo('App\vehiculo');
   }

    public function factura(){
   	return $this->hasOne('App\factura');
   }
}

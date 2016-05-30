<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class vehiculo extends Model implements SluggableInterface
{

	use SluggableTrait;

	protected $sluggable = [
		'build_from'	=> ['marca','modelo','placa'],
		'save_to'		=> 'slug',
	];

    protected $table = 'vehiculo';
    protected $fillable = ['tipo', 'marca', 'capacidad', 'color', 'modelo', 'placa', 'kilometraje', 'disponibilidad'];

    public function solicitud_renta(){
   		return $this->hasMany('App\solicitud_renta');
   }
}

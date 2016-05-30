<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bono extends Model
{
   protected $table = "bono";
   protected $fillable = ['valor', 'user_id'];
   public function user(){
   	return $this->belongsTo('App\User');
   }
}
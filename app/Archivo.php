<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{

	protected $fillable = ['titulo', 'autor', 'pub_lugar','pub_editorial','pub_year','edicion','calificacion','archivo','archivotipo_id','posteador','decripcion'];

  	public function archivotipo()
  	{
  		return $this->belongsTo('App\Archivotipo');
  	}
  	public function scopeSearch($query, $titulo, $tipo)
  	{
  		if ($tipo == "?")
  			return $query->where('titulo', 'LIKE', "%$titulo%");
  		else{
        if ($titulo != null) {
          return $query->where([
              ['titulo', 'LIKE', "%$titulo%"],
              ['archivotipo_id', '=', $tipo]
          ]);
        }
  		}
  	}
}

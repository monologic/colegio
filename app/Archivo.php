<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    public function architipo()
    {
    	return $this->belongsTo('App\Archivotipo');
    }
}

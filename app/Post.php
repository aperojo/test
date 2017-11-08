<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
*
*/
class Post extends Model
{

	// por defecto accede a Posts pero podemos decirle el nombre de la tabla ($table)
	protected $table = 'posts';
	// campos posibles a rellenar en el modelo...via create
	protected $fillable = ['title', 'description', 'url'];

}


?>
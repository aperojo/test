<?php

namespace App\Http\Controllers;

/**
*
*/
class PruebaController extends Controller
{

	function prueba($id)
	{
		return "Desde controller: el id es {$id}";
	}
}

?>
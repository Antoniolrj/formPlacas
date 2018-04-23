<?php
function posts(){
	//Aquí agregaremos todos los posts que necesitamos para nuestro plugin
	$posts[] = [
		'author' => 1,
		'slug'   => 'formulario-placas',
		'title'  => 'Formulario de placas',
		'content'=> '[formulario]',
		'type'   => 'formulario_placas'
	];
          
	return $posts;
}

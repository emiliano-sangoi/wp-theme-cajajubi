<?php


$dir = '/home';
$dir_copia = '';
$archivos = scandir($dir);

// poner aca los archivos a omitir:
$archivos_a_omitir = array(".","..");

foreach($archivos as $archivo){
	if (in_array($archivo, $archivos_a_omitir)){
		continue;
	}

	$archivo = str_replace(array(' '), array('_'), $archivo);	
	copy($dir . $archivo, $dir_copia . $archivo);
}

<?php


$dir = '/home/eliana/vagrant/www/wp-caja/wp-content/themes/sitio_lacaja/biblio_normativas/';
$dir_copia = '/home/eliana/vagrant/www/wp-caja/wp-content/themes/sitio_lacaja/biblio_normativas/NORMATIVAS/';
$archivos = scandir($dir);

// poner aca los archivos a omitir:
$archivos_a_omitir = array(".","..","NORMATIVAS");

foreach($archivos as $archivo){
	if (in_array($archivo, $archivos_a_omitir)){
		continue;
	}

	$archivo_nuevo = str_replace(array(' '), array('_'), $archivo);	
        $archivo_nuevo = 'NORM_' . $archivo_nuevo;
//        echo $archivo . "\n" ;
	copy($dir . $archivo, $dir_copia . $archivo_nuevo);
}

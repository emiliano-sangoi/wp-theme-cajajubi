<?php

$base = '/home/eliana/vagrant/www/wp-caja/wp-content/themes/sitio_lacaja/';

/**
 * Permite listar el nombre de los archivos sin copiarlos.
 */
$dry_run = false;

//Renombrado de normativas:
$dir_normativas = $base . 'biblio_normativas/';
sanitizarYCopiar($dir_normativas, $dir_normativas . '/NORMATIVAS/', 'NORM_', $dry_run);

//Renombrado de normativas:
$dir_forms = $base . 'biblio_formularios/';
sanitizarYCopiar($dir_forms, $dir_forms . '/FORMULARIOS/', 'FORM_', $dry_run);

//Renombrado de instructivos:
$dir_instructivos = $base . 'biblio_instructivos/';
sanitizarYCopiar($dir_instructivos, $dir_instructivos . '/INSTRUCTIVOS/', 'INST_', $dry_run);

function sanitizarYCopiar($origen = '', $destino = '', $prefijo = '', $dry_run = false) {
    
    if(!file_exists($origen)){
        echo "No existe el directorio: $origen \n";
        return;
    }
    
    if(!file_exists($destino)){
        echo "No existe el directorio: $destino \n";
        return;
    }
    
//    $excluir = array(
//        'INSTRUCTIVOS',
//        'FORMULARIOS',
//        'NORMATIVAS',
//        '.',
//        '..'
//    );
    
    $archivos = scandir($origen);

    foreach ($archivos as $archivo) {
        if (is_dir($origen . $archivo)) {
            continue;
        }

        $archivo_nuevo = str_replace(array(' '), array('_'), $archivo);
        $archivo_nuevo = $prefijo . $archivo_nuevo;
        if ($dry_run) {
            echo $archivo_nuevo . "\n";
        } else {
            copy($origen . $archivo, $destino . $archivo_nuevo);
        }
    }
}

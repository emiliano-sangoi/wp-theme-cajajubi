<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<?php
$args = null;

$args = wp_parse_args(
    $args,
    array(
        'class'          => 'sddsds',
        'arbitrary_data' => array(
            'foo' => 'fooval',
            'bar' => false,
        ),        
    )
);


echo $args['class'];

?>


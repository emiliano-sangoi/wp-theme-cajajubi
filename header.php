<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="Directing Template">
        <meta name="keywords" content="Directing, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">

        <title>
            <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
        </title>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!--<link rel="shortcut icon" href="<?php //echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>-->

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

<!-- Header Section Begin -->
<?php get_template_part("partials/navbar");  ?>
<!-- Header Section End -->
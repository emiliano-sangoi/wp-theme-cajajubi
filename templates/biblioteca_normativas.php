<?php
/* Template Name: Normativas */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_BIBLIOTECA_NORMATIVAS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();
?>


<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="normativas">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>    
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $pagina->post_title; ?>
            </li>
        </ol>
    </nav>

    <h1 class="font-weight-bold text-primary">
        <?php echo $pagina->post_title; ?>
    </h1>
    <hr/>
    <div>
        <?php if (empty($pagina->post_content)): ?>
            <p class="text-muted">
                No se ha cargado ningun contenido en esta secci&oacute;n.
            </p>
            <?php
        else:
            echo nl2br($pagina->post_content);
            ?>
        <?php endif; ?>
    </div>
    
    <p><a href="biblio_normativas/Decreto 0851-11.pdf" target="_blank">- Decreto 0851-11</a></p>
    <p><a href="biblio_normativas/Decreto 0994-11 - Deroga el Dec. 1758-02 y reglamenta art 62 y 63 Ley 6915.pdf" target="_blank">- Decreto 0994-11 - Deroga el Dec. 1758-02 y reglamenta art 62 y 63 Ley 6915</a></p>
    <p><a href="biblio_normativas/Decreto 1413-96 - Reglamenta Ley 11373 de Emergencia Previsional.pdf" target="_blank">- Decreto 1413-96 - Reglamenta Ley 11373 de Emergencia Previsional</a></p>
    <p><a href="biblio_normativas/Decreto 1758-02 - Reglamenta art 62 y 63 ley 6915 - DEROGADO.pdf" target="_blank">- Decreto 1758-02 - Reglamenta art 62 y 63 ley 6915 - DEROGADO</a></p>
    <p><a href="biblio_normativas/Decreto 2325-04 - Pago de deudas previsionales a mayores de 80 años.pdf" target="_blank">- Decreto 2325-04 - Pago de deudas previsionales a mayores de 80 años</a></p>
    <p><a href="biblio_normativas/Decreto 2864-08 - Reglamentacion Ley 12.867 Veteranos de Malvinas.pdf" target="_blank">- Decreto 2864-08 - Reglamentacion Ley 12.867 Veteranos de Malvinas</a></p>				
    <p><a href="biblio_normativas/Decreto 4000-99 - Cómputo Privilegiado - Diferenciado.pdf" target="_blank">- Decreto 4000-99 - Cómputo Privilegiado - Diferenciado</a></p>
    <p><a href="biblio_normativas/Decreto 4174 - 2015 -Actuaciones Administrativas.pdf" target="_blank">- Decreto 4174 - 2015 -Actuaciones Administrativas</a></p>         
    <p><a href="biblio_normativas/Decreto Ley 9316-46 -Instituye Régimen Reciprocidad Jubilatoria.pdf" target="_blank">- Decreto Ley 9316-46 -Instituye Régimen Reciprocidad Jubilatoria</a></p> 
    <p><a href="biblio_normativas/Ley 2722 - Creación Caja.pdf" target="_blank">- Ley 2722 - Creación Caja</a></p>
    <p><a href="biblio_normativas/Ley 4800 - Regimen Civil.pdf" target="_blank">- Ley 4800 - Regimen Civil</a></p>			
    <p><a href="biblio_normativas/Ley 6830 - Regimen Policial.pdf" target="_blank">- Ley 6830 - Regimen Policial</a></p>			
    <p><a href="biblio_normativas/Ley 9290 - Asignaciones Familiares.pdf" target="_blank">- Ley 9290 - Asignaciones Familiares</a></p>
    <p><a href="biblio_normativas/Ley 11373 - Emergencia Previsional.pdf">- Ley 11373 - Emergencia Previsional</a></p>
    <p><a href="biblio_normativas/Ley 12464.pdf" target="_blank">- Ley 12464</a></p>			
    <p><a href="biblio_normativas/Ley 12867 - Veteranos de Malvinas.pdf" target="_blank">- Ley 12867 - Veteranos de Malvinas</a></p>
    <p><a href="biblio_normativas/Ley 13201 - Modifica Regimen Opcional Docente Ley 12464.pdf" target="_blank">- Ley 13201 - Modifica Regimen Opcional Docente Ley 12464</a></p>		
    <p><a href="biblio_normativas/Ley 25326 - PROTECCION DE LOS DATOS PERSONALES.pdf" target="_blank">- Ley 25326 - PROTECCION DE LOS DATOS PERSONALES</a></p>	
    <p><a href="biblio_normativas/Régimen de Jubilaciones y Pensiones- Ley 6915 y modificatorias.pdf" target="_blank">- Régimen de Jubilaciones y Pensiones- Ley 6915 y modificatorias</a></p>	
    <p><a href="biblio_normativas/Resol.ID Nº01-2004-Circuito Pensiones Automaticas.pdf" target="_blank">- Resol.ID Nº01-2004-Circuito Pensiones Automaticas</a></p>		
    <p><a href="biblio_normativas/Resol.ID Nº31-2004-Unifica tramite Pension Automatica.pdf" target="_blank">- Resol.ID Nº31-2004-Unifica tramite Pension Automatica</a></p>			
    <p><a href="biblio_normativas/Resolucion ID 218-2008 - Procedimiento para la verificacion de aportes.pdf" target="_blank">- Resolucion ID 218-2008 - Procedimiento para la verificacion de aportes</a></p>			
    <p><a href="biblio_normativas/Resolución ID 2019-077 - Modifica Circuito de Pensión Automática.pdf" target="_blank">- Resolución ID 2019-077 - Modifica Circuito de Pensión Automática</a></p>			
    <p><a href="biblio_normativas/Resolución S.S.S. N 363-81 - Convenio de reciprocidad con cajas profesionales.pdf">- Resolución S.S.S. N 363-81 - Convenio de reciprocidad con cajas profesionales</a></p>			
    <p><a href="biblio_normativas/RG SFE 001 2018 -Convenios de Pago.pdf" target="_blank">- RG SFE 001 2018 -Convenios de Pago</a></p>            
    <p><a href="biblio_normativas/RG SFE 001 2020 -Plan de facilidades de pago año 2020.pdf" target="_blank">- RG SFE 001 2020 -Plan de facilidades de pago año 2020</a></p>     
    <p><a href="biblio_normativas/RG SFE 0004 2020 -Modifica RG SFE 001 2020 -Plan de facilidades de pago año 2020.pdf" target="_blank">- RG SFE 0004 2020 -Modifica RG SFE 001 2020 -Plan de facilidades de pago año 2020</a></p>
    <p><a href="biblio_normativas/Sistema Penitenciario - Ley 11530.pdf" target="_blank">- Sistema Penitenciario - Ley 11530</a></p>
</div>

<?php get_footer(); ?>
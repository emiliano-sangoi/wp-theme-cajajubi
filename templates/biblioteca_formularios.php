<?php
/* Template Name: Formularios */
//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_BIBLIOTECA_FORMULARIOS);
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


<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="formularios">

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

    <p><a href="biblio_formularios/FD - 01 - Certificado de Servicios  - Rev.2 - Jun 2016.pdf" target="_blank">- FD - 01 - Certificado de Servicios  - Rev.2 - Jun 2016</a></p>
    <p><a href="biblio_formularios/FD - 02 - Fojas de Servicios y Montos - Rev.2 - Jun 2016.pdf" target="_blank">- FD - 02 - Fojas de Servicios y Montos - Rev.2 - Jun 2016</a></p>
    <p><a href="biblio_formularios/FD - 03 - Fojas de Servicios y Montos Municipios y Comunas  - Rev.2 - Jun 2016.pdf" target="_blank">- FD - 03 - Fojas de Servicios y Montos Municipios y Comunas  - Rev.2 - Jun 2016</a></p>				
    <p><a href="biblio_formularios/FD - 04 - Certificación de Servicios Resumida - Rev.2 - Jun 2016.pdf" target="_blank">- FD - 04 - Certificación de Servicios Resumida - Rev.2 - Jun 2016</a></p>				
    <p><a href="biblio_formularios/FD - 05 - Foja de servicios detallada y montos - Pág 01 - Rev.2 - Jun 2016.pdf" target="_blank">- FD - 05 - Foja de servicios detallada y montos - Pág 01 - Rev.2 - Jun 2016</a></p>				
    <p><a href="biblio_formularios/FR - 01 - Solicitud de Jubilación o Retiro Rev.7 - Jul 2020.pdf" target="_blank">- FR - 01 - Solicitud de Jubilación o Retiro Rev.7 - Jul 2020</a></p>	
    <p><a href="biblio_formularios/FR - 03 - Solicitud de Pensión Rev.14 - Jul 2020.pdf" target="_blank">- FR - 03 - Solicitud de Pensión Rev.14 - Jul 2020</a></p>			
    <p><a href="biblio_formularios/FR - 04 - Solicitud de Pensión - Anexo Hijos Rev.2 - Feb 2020.pdf" target="_blank">- FR - 04 - Solicitud de Pensión - Anexo Hijos Rev.2 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 05 - Solicitud de Asignación Familiar por Cónyuge - Rev.8 Feb 2020.pdf" target="_blank">- FR - 05 - Solicitud de Asignación Familiar por Cónyuge - Rev.8 Feb 2020</a></p>			
    <p><a href="biblio_formularios/FR - 06 - Reliquidación de Ordenes de Pago Rev.5 - Feb 2020.pdf" target="_blank">- FR - 06 - Reliquidación de Ordenes de Pago Rev.5 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 08 - Solicitud Autorización percibir haberes en el exterior R6-Feb 2020.pdf" target="_blank">- FR - 08 - Solicitud Autorización percibir haberes en el exterior R6-Feb 2020</a></p>			
    <p><a href="biblio_formularios/FR - 10 - Solicitud de Rec de Computo Privilegiado Diferenciado R5-Feb20.pdf" target="_blank">- FR - 10 - Solicitud de Rec de Computo Privilegiado Diferenciado R5-Feb20</a></p>				
    <p><a href="biblio_formularios/FR - 11 - Solicitud de Reconocimiento de Servicios -Rev6- feb-20.pdf" target="_blank">- FR - 11 - Solicitud de Reconocimiento de Servicios -Rev6- feb-20</a></p>				
    <p><a href="biblio_formularios/FR - 12 - Solicitud de Asignaciones Familiares de pago UNICO Rev. 5 Feb 2020.pdf" target="_blank">- FR - 12 - Solicitud de Asignaciones Familiares de pago UNICO Rev. 5 Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 13 - Solicitud de Asignación Familiar PRENATAL Rev.4 - Feb 2020.pdf" target="_blank">- FR - 13 - Solicitud de Asignación Familiar PRENATAL Rev.4 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 14 - Solicitud de BAJA de Asignaciones Familiares  Rev.2 - Feb 2020.pdf" target="_blank">- FR - 14 - Solicitud de BAJA de Asignaciones Familiares  Rev.2 - Feb 2020</a></p>		
    <p><a href="biblio_formularios/FR - 15 - Conformidad para notificaciones electrónicas Rev.3 - Jul 2020.pdf" target="_blank">- FR - 15 - Conformidad para notificaciones electrónicas Rev.3 - Jul 2020</a></p>				
    <p><a href="biblio_formularios/FR - 16 - DDJJ Pension hija sin derecho por estado civil Rev.2 - Feb 2020.pdf" target="_blank">- FR - 16 - DDJJ Pension hija sin derecho por estado civil Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 17 - Solicitud de Recibos de Haberes - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 17 - Solicitud de Recibos de Haberes - Rev.2 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 18 - Certificado de Supervivencia - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 18 - Certificado de Supervivencia - Rev.1 - Feb 2020</a></p>		
    <p><a href="biblio_formularios/FR - 19 - Solicitud de Asignaciones Familiares VARIAS - Rev.2  Feb 2020.pdf" target="_blank">- FR - 19 - Solicitud de Asignaciones Familiares VARIAS - Rev.2  Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 20 - Constitución de Fianza Rev.1 - Feb 2020.pdf" target="_blank">- FR - 20 - Constitución de Fianza Rev.1 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 21 - Carta Poder para TRAMITAR - Rev.5 - Jul 2020.pdf" target="_blank">- FR - 21 - Carta Poder para TRAMITAR - Rev.5 - Jul 2020</a></p>			
    <p><a href="biblio_formularios/FR - 22 - Carta Poder para PERCIBIR - Rev.4 - Jul 2020.pdf" target="_blank">- FR - 22 - Carta Poder para PERCIBIR - Rev.4 - Jul 2020</a></p>	
    <p><a href="biblio_formularios/FR - 23 - Ofrecimiento de Testigos Rev.1 - Feb 2020.pdf" target="_blank">- FR - 23 - Ofrecimiento de Testigos Rev.1 - Feb 2020</a></p>			
    <p><a href="biblio_formularios/FR - 24 - Solicitud de Anticipo Rev.1 - Feb 2020.pdf" target="_blank">- FR - 24 - Solicitud de Anticipo Rev.1 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 25 - Solicitud de Antecedentes Previsionales - ANSES Rev.2 - Feb 2020.pdf" target="_blank">- FR - 25 - Solicitud de Antecedentes Previsionales - ANSES Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 26 - Solicitud de Antecedentes Previsional-Otras Cajas Rev.1-Feb 2020.pdf" target="_blank">- FR - 26 - Solicitud de Antecedentes Previsional-Otras Cajas Rev.1-Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 27 - Solicitud de Subsidio por Sepelio - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 27 - Solicitud de Subsidio por Sepelio - Rev.2 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 28 - Solicitud de Pago de Haberes Rev.2 - Feb 2020.pdf" target="_blank">- FR - 28 - Solicitud de Pago de Haberes Rev.2 - Feb 2020</a></p>		
    <p><a href="biblio_formularios/FR - 29 - Modelo de Nota de Renuncia Condicionada  - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 29 - Modelo de Nota de Renuncia Condicionada  - Rev.1 - Feb 2020</a></p>		
    <p><a href="biblio_formularios/FR - 30 - Declaración Jurada Autorización para el cobro de Salario Familiar - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 30 - Declaración Jurada Autorización para el cobro de Salario Familiar - Rev.1 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 31 - Declaración Jurada de Situación Laboral - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 31 - Declaración Jurada de Situación Laboral - Rev.1 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 32 - Declaración Jurada para Hijo Pensionado entre 18 y 21 años de edad - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 32 - Declaración Jurada para Hijo Pensionado entre 18 y 21 años de edad - Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 33 - Declaración Jurada Conviviente - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 33 - Declaración Jurada Conviviente - Rev.2 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 34 - DDJJ Cónyuge Supérstite con Diferencias de Domicilio - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 34 - DDJJ Cónyuge Supérstite con Diferencias de Domicilio - Rev.2 - Feb 2020</a></p>			
    <p><a href="biblio_formularios/FR - 39 - Alta Organismo Aportante - ADMINISTRACIÓN CENTRAL- Rev.1 - Feb 2020.pdf" target="_blank">- FR - 35 - Alta Organismo Aportante - ESCUELAS - Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 36 - Alta Organismo Aportante - MUNICIPIOS Y COMUNAS - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 36 - Alta Organismo Aportante - MUNICIPIOS Y COMUNAS - Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 37 - Alta Organismo Aportante - DESCENTRALIZADOS - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 37 - Alta Organismo Aportante - DESCENTRALIZADOS - Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 38 - Alta Organismo Aportante - ADHERIDOS - Rev.2 - Feb 2020.pdf" target="_blank">- FR - 38 - Alta Organismo Aportante - ADHERIDOS - Rev.2 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 39 - Alta Organismo Aportante - ADMINISTRACIÓN CENTRAL- Rev.1 - Feb 2020.pdf" target="_blank">- FR - 39 - Alta Organismo Aportante - ADMINISTRACIÓN CENTRAL- Rev.1 - Feb 2020</a></p>
    <p><a href="biblio_formularios/FR - 40 - DDJJ cuando el causante falleció en los 30 días posteriores al matrimonio  - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 40 - DDJJ cuando el causante falleció en los 30 días posteriores al matrimonio  - Rev.1 - Feb 2020</a></p>				
    <p><a href="biblio_formularios/FR - 41 - DDJJ sobre Separación de Hecho - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 41 - DDJJ sobre Separación de Hecho - Rev.1 - Feb 2020</a></p>		
    <p><a href="biblio_formularios/FR - 42 - Solicitud de Certificación de Firmas - Rev.1 - Feb 2020.pdf" target="_blank">- FR - 42 - Solicitud de Certificación de Firmas - Rev.1 - Feb 2020</a></p>		
    <p><a href="biblio_formularios/FR - 43 - Solicitud de Copia de Resolución Rev.1 - Feb 2020.pdf" target="_blank">- FR - 43 - Solicitud de Copia de Resolución Rev.1 - Feb 2020</a></p>	
    <p><a href="biblio_formularios/FR - 44 - DDJJ sobre Servicios con Aportes a otros regímenes - Rev.0 - Jun 2020.pdf" target="_blank">- FR - 44 - DDJJ sobre Servicios con Aportes a otros regímenes - Rev.0 - Jun 2020</a></p>			
    <p><a href="biblio_formularios/Reconocimiento de Servicios Region Centro - Rev.2 - Jun 2016.pdf" target="_blank">- Reconocimiento de Servicios Region Centro - Rev.2 - Jun 2016</a></p>				

</div>    



<?php get_footer(); ?>
<div class='card'>
    <div class="card-body">            
        <h3 class="h4 font-weight-bold">
            <?php echo $titulo; ?>
        </h3>
        <div class='table-responsive'>
            <table class="table table-sm table-borderless mb-0">
                <tbody>
                    <tr>
                        <td class='w-3 text-center'>
                            <i class="fa fa-map-marker" title="Dirección"></i>
                        </td>
                        <td>
                            <?php echo $direccion; ?>
                        </td>
                    </tr>
                    <?php if ($mostrar_turno_web): ?>
                        <tr>
                            <td class='w-3 text-center'>
                                <i class="fa fa-calendar"></i>
                            </td>
                            <td>
                                <a href="http://turnos.santafe.gov.ar/" target="_blank">
                                    Atención al público con turno web previo
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                        <?php if ($telefono): ?>
                    <tr>
                        <td class='w-3 text-center'>
                            <i class="fa fa-phone" title="Teléfono(s)"></i>
                        </td>
                        <td>
                            <?php echo $telefono; ?>                                                               
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($fax): ?>
                    <tr>
                        <td class='w-3 text-center'>
                            <i class="fa fa-fax" title="Fax"></i>
                        </td>
                        <td>
                            <?php echo $fax; ?>                                                               
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($whatsapp): ?>
                        <tr>
                            <td class='w-3 text-center text-center'>
                                <i class="fa fa-whatsapp" title="What's Up"></i>
                            </td>
                            <td>
                                342 5 128 800
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>                                                                        
    </div>
</div>
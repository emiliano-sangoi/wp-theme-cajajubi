<div class='card'>
    <div class="card-body">            
        <h3 class="h4 font-weight-bold">
            <?php echo $titulo; ?>
        </h3>
        <div>
            <table class="table table-sm table-borderless mb-0">
                <tbody>
                    <tr>
                        <td>
                            <i class="fa fa-map-marker" title="Dirección"></i>
                        </td>
                        <td>
                            <?php echo $direccion; ?>
                        </td>
                    </tr>
                    <?php if ($mostrar_turno_web): ?>
                        <tr>
                            <td>
                                <i class="fa fa-calendar"></i>&nbsp;
                            </td>
                            <td>
                                <a href="turnos.santafe.gov.ar/" target="_blank">
                                    Atención al público con turno web previo
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                        <?php if ($telefono): ?>
                    <tr>
                        <td>
                            <i class="fa fa-phone" title="Teléfono(s)"></i>&nbsp;
                        </td>
                        <td>
                            <?php echo $telefono; ?>                                                               
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($fax): ?>
                    <tr>
                        <td>
                            <i class="fa fa-fax" title="Fax"></i>&nbsp;
                        </td>
                        <td>
                            <?php echo $fax; ?>                                                               
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($whatsapp): ?>
                        <tr>
                            <td>
                                <i class="fa fa-whatsapp" title="What's Up"></i>&nbsp;
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
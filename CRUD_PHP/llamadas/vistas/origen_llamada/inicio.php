<a name="" id="" class="btn btn-success" href="?controlador=origen_llamada&accion=crear" role="button">Agregar Origen de Llamada</a>

<table id="origenllamada" class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Origen de Llamada</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($OrigenLlamadaC as $origenllamada) {  ?>
        <tr>
            <td><?php echo $origenllamada->idOrigenLlamada ?></td>
            <td><?php echo $origenllamada->origenLlamada ?></td>
            <td>

            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=origen_llamada&accion=editar&id=<?php echo $origenllamada->idOrigenLlamada ?>" type="button" class="btn btn-info">Editar</a>
                <a href="?controlador=origen_llamada&accion=borrar&id=<?php echo $origenllamada->idOrigenLlamada ?>" type="button" class="btn btn-danger">Borrar</a>
            </div>            

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#origenllamada').DataTable();
} );    
</script>

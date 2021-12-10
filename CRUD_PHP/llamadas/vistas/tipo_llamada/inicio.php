<a name="" id="" class="btn btn-success" href="?controlador=tipo_llamada&accion=crear" role="button">Agregar Tipo de Llamada</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo de Llamada</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($TipoLlamadaC as $tipollamada) {  ?>
        <tr>
            <td><?php echo $tipollamada->idTipoLlamada ?></td>
            <td><?php echo $tipollamada->tipoLlamada ?></td>
            <td>

            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=tipo_llamada&accion=editar&id=<?php echo $tipollamada->idTipoLlamada ?>" type="button" class="btn btn-info">Editar</a>
                <a href="?controlador=tipo_llamada&accion=borrar&id=<?php echo $tipollamada->idTipoLlamada ?>" type="button" class="btn btn-danger">Borrar</a>
            </div>            

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

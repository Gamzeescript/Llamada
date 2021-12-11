<a name="" id="" class="btn btn-success" href="?controlador=gestion&accion=crear" role="button">Agregar Gestion</a>

<table id="gestion" class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Origen de Llamada</th>
            <th>Tipo de Llamada</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Gestion</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($GestionC as $gestion) {  ?>
        <tr>
            <td><?php echo $gestion['id_gestion'] ?></td>
            <td><?php echo $gestion['origen_llamada'] ?></td>
            <td><?php echo $gestion['tipo_llamada'] ?></td>
            <td><?php echo $gestion['nombre'] ?></td>                
            <td><?php echo $gestion['telefono'] ?></td>   
            <td><?php echo $gestion['gestion'] ?></td>
            <td>

            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=gestion&accion=editar&id=<?php echo $gestion['id_gestion'] ?>" type="button" class="btn btn-info">Editar</a>
                <a href="?controlador=gestion&accion=borrar&id=<?php echo $gestion['id_gestion'] ?>" type="button" class="btn btn-danger">Borrar</a>
            </div>            

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#gestion').DataTable();
} );    
</script>

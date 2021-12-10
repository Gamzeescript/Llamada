<div class="card">
    <div class="card-header">
        Editar Tipo de Llamada
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
            <label for="idTipo" class="form-label">Id:</label>
            <input type="text" readonly
                class="form-control" value="<?php echo $TipoLlamadaC->idTipoLlamada;  ?>" name="idTipo" id="idTipo" aria-describedby="helpId" placeholder="Id Rol">
        </div>

        <div class="mb-3">
            <label for="nombreTipo" class="form-label">Nombre Tipo de Llamada</label>
            <input type="text"
                class="form-control" value="<?php echo $TipoLlamadaC->tipoLlamada;  ?>" name="nombreTipo" id="nombreTipo" aria-describedby="helpId" placeholder="Nombre Tipo de Llamada">
        </div>

              
                <input name="" id="" class="btn btn-success" type="submit" value="Editar Rol">

        </form>
    </div>
</div>
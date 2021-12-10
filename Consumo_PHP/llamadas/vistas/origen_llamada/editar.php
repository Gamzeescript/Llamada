<div class="card">
    <div class="card-header">
        Editar Origen de Llamada
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
            <label for="idOrigen" class="form-label">Id:</label>
            <input type="text" readonly
                class="form-control" value="<?php echo $OrigenLlamadaC->idOrigenLlamada;  ?>" name="idOrigen" id="idOrigen" aria-describedby="helpId" placeholder="Id Rol">
        </div>

        <div class="mb-3">
            <label for="nombreOrigen" class="form-label">Nombre Origen de Llamada</label>
            <input type="text"
                class="form-control" value="<?php echo $OrigenLlamadaC->origenLlamada;  ?>" name="nombreOrigen" id="nombreOrigen" aria-describedby="helpId" placeholder="Nombre Origen de Llamada">
        </div>

              
                <input name="" id="" class="btn btn-success" type="submit" value="Editar Rol">

        </form>
    </div>
</div>
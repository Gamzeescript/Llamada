<div class="card">
    <div class="card-header">
        Registrar Gestion
    </div>
    <div class="card-body">
        <form action="" method="post">

                <div class="mb-3">
                    <label for="nombreGestion" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombreGestion" id="nombreGestion" aria-describedby="helpId" placeholder="Nombre">
                </div>

                <div class="mb-3">
                    <label for="telefonoGestion" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefonoGestion" id="telefonoGestion" aria-describedby="helpId" placeholder="Telefono">
                </div>                

                <div class="mb-3">
                    <label for="gestion" class="form-label">Gestion</label>
                    <input type="text" class="form-control" name="gestion" id="gestion" aria-describedby="helpId" placeholder="Gestion">
                </div>                 

                <div class="mb-3">
                    <label for="tipoLlamada" class="form-label">Tipo de Llamada</label>
                    <select class="form-control" name="tipoLlamada" id="tipoLlamada">
                        <option selected>Seleccione el Tipo de Llamada</option>
                        <?php foreach ($TipoLlamadaC as $TipoLlamada) {  ?>                        
                            <option value="<?php echo $TipoLlamada->idTipoLlamada ?>"><?php echo $TipoLlamada->tipoLlamada ?></option>
                        <?php } ?>                        
                    </select>
                </div>              

                <div class="mb-3">
                    <label for="origenLlamada" class="form-label">Origen de Llamada</label>
                    <select class="form-control" name="origenLlamada" id="origenLlamada">
                        <option selected>Seleccione el Origen de Llamada</option>
                        <?php foreach ($OrigenLlamadaC as $OrigenLlamada) {  ?>                        
                            <option value="<?php echo $OrigenLlamada->idOrigenLlamada ?>"><?php echo $OrigenLlamada->origenLlamada ?></option>
                        <?php } ?>                        
                    </select>
                </div> 

                <input name="" id="" class="btn btn-success" type="submit" value="Agregar Gestion">

        </form>
    </div>
</div>
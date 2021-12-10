<?php

class TipoLlamada{

    public $idTipoLlamada;
    public $tipoLlamada;


    public function __construct($idTipoLlamada, $tipoLlamada){

        $this-> idTipoLlamada = $idTipoLlamada;
        $this-> tipoLlamada = $tipoLlamada;
        
    }

    public function consultar(){
        $listaTipoLlamada = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("select * from tipo_llamada");
    
        foreach($sql->fetchAll() as $tipolla){
    
            $listaTipoLlamada[] = new TipoLlamada($tipolla['id_tipo_llamada'], $tipolla['tipo_llamada']);
    
        }
    
        return $listaTipoLlamada;
    } 

    public static function crear($nombreTipoLlamada){

        $conexionBD = BD::crearInstancia();
    
        $sql = $conexionBD->prepare("INSERT INTO tipo_llamada(tipo_llamada) VALUES(?) ");
        $sql->execute(array($nombreTipoLlamada)); 
    
    }   

    public function borrar($id){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("DELETE FROM tipo_llamada WHERE id_tipo_llamada =? ");
        $sql->execute(array($id)); 

    }    

    public function buscar($id){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("SELECT * FROM tipo_llamada WHERE id_tipo_llamada=? ");
        $sql->execute(array($id)); 
        $tipolla = $sql->fetch();
        return new TipoLlamada($tipolla['id_tipo_llamada'], $tipolla['tipo_llamada']);

    }

    public static function editar($id, $nombreTipoLlamada){

        $conexionBD = BD::crearInstancia();
    
        $sql = $conexionBD->prepare("UPDATE tipo_llamada SET tipo_llamada=? WHERE id_tipo_llamada=? ");
        $sql->execute(array($nombreTipoLlamada, $id)); 
    
    }           

}

?>
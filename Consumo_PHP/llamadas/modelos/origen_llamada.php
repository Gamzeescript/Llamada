<?php

class OrigenLlamada{

    public $idOrigenLlamada;
    public $origenLlamada;


    public function __construct($idOrigenLlamada, $origenLlamada){

        $this-> idOrigenLlamada = $idOrigenLlamada;
        $this-> origenLlamada = $origenLlamada;
        
    }

    public function consultar(){
        $listaOrigenLlamada = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("select * from origen_llamada");
    
        foreach($sql->fetchAll() as $origenlla){
    
            $listaOrigenLlamada[] = new OrigenLlamada($origenlla['id_origen_llamada'], $origenlla['origen_llamada']);
    
        }
    
        return $listaOrigenLlamada;
    } 

    public static function crear($nombreOrigenLlamada){

        $conexionBD = BD::crearInstancia();
    
        $sql = $conexionBD->prepare("INSERT INTO origen_llamada(origen_llamada) VALUES(?) ");
        $sql->execute(array($nombreOrigenLlamada)); 
    
    }   

    public function borrar($id){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("DELETE FROM origen_llamada WHERE id_origen_llamada =? ");
        $sql->execute(array($id)); 

    }    

    public function buscar($id){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("SELECT * FROM origen_llamada WHERE id_origen_llamada=? ");
        $sql->execute(array($id)); 
        $origenlla = $sql->fetch();
        return new OrigenLlamada($origenlla['id_origen_llamada'], $origenlla['origen_llamada']);

    }

    public static function editar($id, $nombreOrigenLlamada){

        $conexionBD = BD::crearInstancia();
    
        $sql = $conexionBD->prepare("UPDATE origen_llamada SET origen_llamada=? WHERE id_origen_llamada=? ");
        $sql->execute(array($nombreOrigenLlamada, $id)); 
    
    }           

}

?>
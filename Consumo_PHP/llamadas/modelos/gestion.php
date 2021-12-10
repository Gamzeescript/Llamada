<?php

class Gestion{

    public $idGestion;
    public $idTipoLlamada;
    public $idOrigenLlamada;
    public $nombre;
    public $telefono;
    public $gestion;


    public function __construct($idGestion, $idTipoLlamada, $idOrigenLlamada, $nombre, $telefono, $gestion){

        $this-> idGestion = $idGestion;
        $this-> idTipoLlamada = $idTipoLlamada;
        $this-> idOrigenLlamada = $idOrigenLlamada;
        $this-> nombre = $nombre;
        $this-> telefono = $telefono;
        $this-> gestion = $gestion;
        
    }

    public function consultar(){
        $listaGestion = [];
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->query("SELECT g.id_gestion, ol.origen_llamada, tl.tipo_llamada, g.nombre, g.telefono, g.gestion FROM gestion g INNER JOIN origen_llamada ol ON ol.id_origen_llamada = g.id_origen_llamada INNER JOIN tipo_llamada tl ON tl.id_tipo_llamada = g.id_tipo_llamada;");

        $listaGestion = $sql->fetchAll();
    
        return $listaGestion;
    }    

    public static function crear($nombreGestion, $telefonoGestion, $gestion, $tipoLlamada, $origenLlamada){

        $conexionBD = BD::crearInstancia();
    
        $sql = $conexionBD->prepare("INSERT INTO gestion(id_tipo_llamada, id_origen_llamada, nombre, telefono, gestion ) VALUES(?,?,?,?,?) ");
        $sql->execute(array($tipoLlamada, $origenLlamada, $nombreGestion, $telefonoGestion, $gestion)); 
    
    }

    public function borrar($id){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("DELETE FROM gestion WHERE id_gestion =? ");
        $sql->execute(array($id)); 

    }    

    public function buscar($id){

        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("SELECT * FROM gestion WHERE id_gestion=? ");
        $sql->execute(array($id)); 
        $gestion = $sql->fetch();
        return new Gestion($gestion['id_gestion'], $gestion['id_tipo_llamada'], $gestion['id_origen_llamada'], $gestion['nombre'], $gestion['telefono'], $gestion['gestion']);

    }

    public static function editar($id, $nombreGestion, $telefonoGestion, $gestion, $tipoLlamada, $origenLlamada){

        $conexionBD = BD::crearInstancia();
    
        $sql = $conexionBD->prepare("UPDATE gestion SET id_tipo_llamada=?, id_origen_llamada=?, nombre=?, telefono=?, gestion=? WHERE id_gestion=? ");
        $sql->execute(array($tipoLlamada, $origenLlamada, $nombreGestion, $telefonoGestion, $gestion, $id)); 
    
    }         

}

?>
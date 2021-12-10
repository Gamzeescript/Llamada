<?php

include_once("modelos/origen_llamada.php");
include_once("conexion.php");

BD::crearInstancia();

class  ControladorOrigen_llamada{

    public function crear(){

        if($_POST){
            //print_r($_POST);
            $nombreOrigen = $_POST['nombreOrigen'];

            OrigenLlamada::crear($nombreOrigen);

            header("Location: ./?controlador=origen_llamada&accion=inicio");       

        }

        include_once("vistas/origen_llamada/crear.php");


    }

    public function editar(){

        $id = $_GET['id'];
        
        $OrigenLlamadaC = OrigenLlamada::buscar($id);

        if($_POST){
            //print_r($_POST);
            $idorigen = $_POST['idOrigen'];
            $nombreOrigen = $_POST['nombreOrigen'];

            OrigenLlamada::editar($idorigen, $nombreOrigen);

            header("Location: ./?controlador=origen_llamada&accion=inicio");                

        }

        include_once("vistas/origen_llamada/editar.php");

    }

    public function inicio(){

        $OrigenLlamadaC = OrigenLlamada::consultar();

        include_once("vistas/origen_llamada/inicio.php");

    }

    public function borrar(){

        $id = $_GET['id'];
        $OrigenLlamadaC = OrigenLlamada::borrar($id);

        header("Location: ./?controlador=origen_llamada&accion=inicio");
    }    

    
}

?>
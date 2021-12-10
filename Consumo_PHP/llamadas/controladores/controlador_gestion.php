<?php

include_once("modelos/tipo_llamada.php");
include_once("modelos/origen_llamada.php");
include_once("modelos/gestion.php");
include_once("conexion.php");

BD::crearInstancia();

class  ControladorGestion{

    public function crear(){

        if($_POST){
            //print_r($_POST);
            $nombreGestion = $_POST['nombreGestion'];
            $telefonoGestion = $_POST['telefonoGestion'];
            $gestion = $_POST['gestion'];
            $tipoLlamada = $_POST['tipoLlamada'];
            $origenLlamada = $_POST['origenLlamada'];

            Gestion::crear($nombreGestion, $telefonoGestion, $gestion, $tipoLlamada, $origenLlamada);

            header("Location: ./?controlador=gestion&accion=inicio");             

        }

        $TipoLlamadaC = TipoLlamada::consultar();
        $OrigenLlamadaC = OrigenLlamada::consultar();

        include_once("vistas/gestion/crear.php");


    }

    public function editar(){

        $id = $_GET['id'];
        
        $GestionC = Gestion::buscar($id);

        if($_POST){
            //print_r($_POST);
            $idGestion = $_POST['idGestion'];
            $nombreGestion = $_POST['nombreGestion'];
            $telefonoGestion = $_POST['telefonoGestion'];
            $gestion = $_POST['gestion'];
            $tipoLlamada = $_POST['tipoLlamada'];
            $origenLlamada = $_POST['origenLlamada'];

            Gestion::editar($idGestion, $nombreGestion, $telefonoGestion, $gestion, $tipoLlamada, $origenLlamada);

            header("Location: ./?controlador=gestion&accion=inicio");            

        }        

        $TipoLlamadaC = TipoLlamada::consultar();
        $OrigenLlamadaC = OrigenLlamada::consultar();    

        include_once("vistas/gestion/editar.php");

    }

    public function inicio(){

        $GestionC = Gestion::consultar();

        include_once("vistas/gestion/inicio.php");

    }

    public function borrar(){

        $id = $_GET['id'];
        $GestionC = Gestion::borrar($id);

        header("Location: ./?controlador=gestion&accion=inicio");
    }    

    
}

?>
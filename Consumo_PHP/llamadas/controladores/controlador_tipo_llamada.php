<?php

include_once("modelos/tipo_llamada.php");
include_once("conexion.php");

BD::crearInstancia();

class  ControladorTipo_llamada{

    public function crear(){

        if($_POST){
            //print_r($_POST);
            $nombreTipo = $_POST['nombreTipo'];

            TipoLlamada::crear($nombreTipo);

            header("Location: ./?controlador=tipo_llamada&accion=inicio");       

        }

        include_once("vistas/tipo_llamada/crear.php");


    }

    public function editar(){

        $id = $_GET['id'];
        
        $TipoLlamadaC = TipoLlamada::buscar($id);

        if($_POST){
            //print_r($_POST);
            $idTipo = $_POST['idTipo'];
            $nombreTipo = $_POST['nombreTipo'];

            TipoLlamada::editar($idTipo, $nombreTipo);

            header("Location: ./?controlador=tipo_llamada&accion=inicio");                

        }

        include_once("vistas/tipo_llamada/editar.php");

    }

    public function inicio(){

        $TipoLlamadaC = TipoLlamada::consultar();

        include_once("vistas/tipo_llamada/inicio.php");

    }

    public function borrar(){

        $id = $_GET['id'];
        $TipoLlamadaC = TipoLlamada::borrar($id);

        header("Location: ./?controlador=tipo_llamada&accion=inicio");
    }    

    
}

?>
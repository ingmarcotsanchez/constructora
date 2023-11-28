<?php
    require_once("../config/conexion.php");
    require_once("../models/Proyectos.php");
    $proyectos = new Proyectos();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["pro_id"])){
                $proyectos->insert_proyectos($_POST["pro_logo"],$_POST["pro_nombre"],$_POST["pro_ciudad"],$_POST["pro_casas"],$_POST["pro_piscinas"],$_POST["pro_parques"],$_POST["pro_tipo"],$_POST["pro_imagen"],$_POST["pro_precio"]);
            }else{
                $proyectos->update_proyectos($_POST["pro_id"],$_POST["pro_logo"],$_POST["pro_nombre"],$_POST["pro_ciudad"],$_POST["pro_casas"],$_POST["pro_piscinas"],$_POST["pro_parques"],$_POST["pro_tipo"],$_POST["pro_imagen"],$_POST["pro_precio"]);
            }
            break;
        case "modificar":
            $proyectos->update_proyectos(
                $_POST["pro_id"],
                $_POST["pro_logo"],
                $_POST["pro_nombre"],
                $_POST["pro_ciudad"],
                $_POST["pro_casas"],
                $_POST["pro_piscinas"],
                $_POST["pro_parques"],
                $_POST["pro_tipo"],
                $_POST["pro_imagen"],
                $_POST["pro_precio"],
            );
            break;
        case "mostrar":
            $proyectos->get_proyectosXid($_POST["pro_id"]);
            break;
        case "eliminar":
            $proyectos->delete_proyectos($_POST["pro_id"]);
            break;
        case "listar":
            $datos=$proyectos->get_proyectos();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["pro_logo"];
                $sub_array[] = $row["pro_nombre"];
                $sub_array[] = $row["pro_ciudad"];
                $sub_array[] = $row["pro_casas"];
                $sub_array[] = $row["pro_piscinas"];
                $sub_array[] = $row["pro_parques"];
                $sub_array[] = $row["pro_tipo"];
                $sub_array[] = $row["est"];
                $sub_array[] = '<button type="button" class="btn btn-outline-warning btn-icon" onClick="editar()" id=""><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar()" id=""><div><i class="fa fa-close"></i></div></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data
            );
            echo json_encode($results);
            break;
    }
<?php
    require_once("../config/conexion.php");
    require_once("../models/Galeria.php");
    $galeria = new Galeria();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["galid"])){
                $galeria->insert_galeria($_POST["gal_imagen"]);
            }else{
                $galeria->update_galeria($_POST["gal_id"],$_POST["gal_imagen"]);
            }
            break;
        case "modificar":
            $galeria->update_galeria(
                $_POST["gal_id"],
                $_POST["gal_imagen"]
            );
            break;
        case "mostrar":
            $galeria->get_galeriaXid($_POST["gal_id"]);
            break;
        case "eliminar":
            $galeria->delete_galeria($_POST["gal_id"]);
            break;
        case "listar":
            $datos=$galeria->get_galeria();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["gal_imagen"];
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
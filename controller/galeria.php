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
                if($row["est"] == '1'){
                    $sub_array[] = "<button type='button' onClick='est_ina(".$row["gal_id"].");' class='btn btn-success btn-sm'>Activo</button>";
                }else{
                    $sub_array[] = "<button type='button' onClick='est_act(".$row["gal_id"].");' class='btn btn-danger btn-sm'>Inactivo</button>";
                }
                $sub_array[] = '<button type="button" class="btn btn-outline-warning btn-icon" onClick="editar('.$row["gal_id"].')" id="'.$row["gal_id"].'"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar('.$row["gal_id"].')" id="'.$row["gal_id"].'"><div><i class="fa fa-close"></i></div></button>';
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
<?php
    require_once("../config/conexion.php");
    require_once("../models/Mntproyectos.php");
    $mntproyectos = new Mntproyectos();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["mpro_id"])){
                $mntproyectos->insert_mntproyectos($_POST["mpro_video"],$_POST["pro_id"],$_POST["mpro_descripcion"],$_POST["mpro_privada"],$_POST["mpro_const"],$_POST["mpro_alcobas"],$_POST["mpro_bannos"],$_POST["mpro_imagen1"],$_POST["mpro_imagen2"],$_POST["mpro_imagen3"],$_POST["mpro_imagen4"],$_POST["mpro_imagen5"],$_POST["mpro_imagen6"],$_POST["mpro_imagen7"],$_POST["mpro_imagen8"],$_POST["mpro_imagen9"],$_POST["mpro_imagen10"]);
            }else{
                $mntproyectos->update_mntproyectos($_POST["mpro_id"],$_POST["mpro_video"],$_POST["pro_id"],$_POST["mpro_descripcion"],$_POST["mpro_privada"],$_POST["mpro_const"],$_POST["mpro_alcobas"],$_POST["mpro_bannos"],$_POST["mpro_imagen1"],$_POST["mpro_imagen2"],$_POST["mpro_imagen3"],$_POST["mpro_imagen4"],$_POST["mpro_imagen5"],$_POST["mpro_imagen6"],$_POST["mpro_imagen7"],$_POST["mpro_imagen8"],$_POST["mpro_imagen9"],$_POST["mpro_imagen10"]);
            }
            break;
        case "mostrar":
            $mntproyectos->get_mntproyectosXid($_POST["mpro_id"]);
            break;
        case "eliminar":
            $mntproyectos->delete_mntproyectos($_POST["mpro_id"]);
            break;
        case "listar":
            $datos=$mntproyectos->get_mntproyectosDetalle();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["pro_nombre"];
                $sub_array[] = $row["mpro_privada"];
                $sub_array[] = $row["mpro_const"];
                $sub_array[] = $row["mpro_alcobas"];
                $sub_array[] = $row["mpro_bannos"];
                if($row["est"] == '1'){
                    $sub_array[] = "<button type='button' onClick='mpro_ina(".$row["mpro_id"].");' class='btn btn-success btn-sm'>Activo</button>";
                }else{
                    $sub_array[] = "<button type='button' onClick='mpro_act(".$row["mpro_id"].");' class='btn btn-danger btn-sm'>Inactivo</button>";
                }
                $sub_array[] = '<button type="button" class="btn btn-outline-warning btn-icon" onClick="editar('.$row["mpro_id"].')" id="'.$row["mpro_id"].'"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar('.$row["mpro_id"].')" id="'.$row["mpro_id"].'"><div><i class="fa fa-trash"></i></div></button>';
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
        case "activo":
            $mntproyectos->update_estadoActivo($_POST["mpro_id"]);
            break;
        case "inactivo":
            $mntproyectos->update_estadoInactivo($_POST["mpro_id"]);
            break;
    }
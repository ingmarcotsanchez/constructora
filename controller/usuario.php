<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuarios = new Usuario();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["usu_id"])){
                $usuarios->insert_usuarios($_POST["usu_foto"],$_POST["usu_nombre"],$_POST["usu_apep"],$_POST["usu_apem"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["usu_telf"]);
            }else{
                $usuarios->update_usuarios($_POST["usu_id"],$_POST["usu_foto"],$_POST["usu_nombre"],$_POST["usu_apep"],$_POST["usu_apem"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["usu_telf"]);
            }
            break;
        case "mostrar":
            $datos=$usuarios->get_usuariosXid($_POST["usu_id"]);
            if(is_array($datos) == true and count($datos)<>0){
                foreach($datos as $row){
                    $output["usu_foto"] = $row["usu_foto"];
                    $output["usu_nombre"] = $row["usu_nombre"];
                    $output["usu_apep"] = $row["usu_apep"];
                    $output["usu_apem"] = $row["usu_apem"];
                    $output["usu_nombre"] = $row["usu_nombre"];
                    $output["usu_correo"] = $row["usu_correo"];
                    $output["usu_pass"] = $row["usu_pass"];
                    $output["usu_telf"] = $row["usu_telf"];
                }
                echo json_encode($output);
            }
            break;
        case "modificar_perfil":
            $usuarios->update_perfil(
                $_POST["usu_id"],
                $_POST["usu_nombre"],
                $_POST["usu_apep"],
                $_POST["usu_apem"],
                $_POST["usu_correo"],
                $_POST["usu_pass"],
                $_POST["usu_telf"]
            );
            break;
        case "eliminar":
            $usuarios->delete_usuarios($_POST["usu_id"]);
            break;
        case "listar":
            $datos=$usuarios->get_usuarios();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["usu_foto"];
                $sub_array[] = $row["usu_nombre"];
                $sub_array[] = $row["usu_apep"];
                $sub_array[] = $row["usu_apem"];
                $sub_array[] = $row["usu_correo"];
                $sub_array[] = $row["usu_pass"];
                $sub_array[] = $row["usu_telf"];
                if($row["est"] == '1'){
                    $sub_array[] = "<button type='button' onClick='est_ina(".$row["usu_id"].");' class='btn btn-success btn-sm'>Activo</button>";
                }else{
                    $sub_array[] = "<button type='button' onClick='est_act(".$row["usu_id"].");' class='btn btn-danger btn-sm'>Inactivo</button>";
                }
                $sub_array[] = '<button type="button" class="btn btn-outline-warning btn-icon" onClick="editar('.$row["usu_id"].')" id="'.$row["usu_id"].'"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar('.$row["usu_id"].')" id="'.$row["usu_id"].'"><div><i class="fa fa-close"></i></div></button>';
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
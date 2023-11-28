<?php
    require_once("../config/conexion.php");
    require_once("../models/Clientes.php");
    $clientes = new Clientes();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["cli_id"])){
                $clientes->insert_clientes($_POST["cli_nombre"],$_POST["cli_correo"],$_POST["cli_telef"],$_POST["cli_asunto"],$_POST["cli_mensaje"]);
            }else{
                $clientes->update_clientes($_POST["cli_id"],$_POST["est"]);
            }
            break;
        case "modificar":
            $clientes->update_clientes(
                $_POST["cli_id"],
                $_POST["est"]
            );
            break;
        case "mostrar":
            $clientes->get_clientesXid($_POST["cli_id"]);
            break;
        case "eliminar":
            $clientes->delete_clientes($_POST["cli_id"]);
            break;
        case "listar":
            $datos=$clientes->get_clientes();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["cli_nombre"];
                $sub_array[] = $row["cli_correo"];
                $sub_array[] = $row["cli_telef"];
                $sub_array[] = $row["cli_asunto"];
                $sub_array[] = $row["cli_mensaje"];
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
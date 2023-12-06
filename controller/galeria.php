<?php
    require_once("../config/conexion.php");
    require_once("../models/Galeria.php");
    $galeria = new Galeria();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["gal_id"])){
                //$tmp_dir="imagenes";
                $tmp_dir = $_FILES['gal_imagen']['tmp_name'];
                $imgFile = $_FILES['gal_imagen']['name'];
                $imgSize = $_FILES['gal_imagen']['size'];
                $upload_dir = '/galeria/';
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                $valid_extensions = array('jpeg', 'jpg', 'png');
                $userpic = rand(1000,1000000).".".$imgExt;
                if(in_array($imgExt, $valid_extensions)){   
                    // Check file size '5MB'
                    if($imgSize < 5000000)    {
                        var_dump(move_uploaded_file($tmp_dir,$upload_dir.$userpic));
                        move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                    }
                    else{
                     $errMSG = "Sorry, your file is too large.";
                    }
                    if(!isset($errMSG)){
                        $galeria->insert_galeria($userpic);
                    }
                }
               
            }else{
              
                $galeria->update_galeria($_POST["gal_id"],$_POST["gal_imagen"]);
            }
            break;
        case "mostrar":
            $datos=$galeria->get_galeriaXid($_POST["gal_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["gal_id"] = $row["gal_id"];
                   // $imgDatos = $row->fetch_assoc();
                   // header("Content-type: image/jpg"); 
                    $output["gal_imagen"] = $row["gal_imagen"];
                }
                echo json_encode($output);
            }
            break;
            break;
        case "eliminar":
            $galeria->delete_galeria($_POST["gal_id"]);
            break;
        case "listar":
            $datos=$galeria->get_galeria();
            $data = Array();
            foreach($datos as $row){
                $sub_array = array();
                $imgDatos = $row["gal_imagen"];
                header("Content-type: image/jpg"); 
                $sub_array[] = $row["gal_imagen"];
                if($row["est"] == '1'){
                    $sub_array[] = "<button type='button' onClick='gal_ina(".$row["gal_id"].");' class='btn btn-success btn-sm'>Activo</button>";
                }else{
                    $sub_array[] = "<button type='button' onClick='gal_act(".$row["gal_id"].");' class='btn btn-danger btn-sm'>Inactivo</button>";
                }
                //$sub_array[] = '<button type="button" class="btn btn-outline-warning btn-icon" onClick="editar('.$row["gal_id"].')" id="'.$row["gal_id"].'"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar('.$row["gal_id"].')" id="'.$row["gal_id"].'"><div><i class="fa fa-trash"></i></div></button>';
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
            $galeria->update_estadoActivo($_POST["gal_id"]);
            break;
        case "inactivo":
            $galeria->update_estadoInactivo($_POST["gal_id"]);
            break;
    }
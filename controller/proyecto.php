<?php
    require_once("../config/conexion.php");
    require_once("../models/Proyectos.php");
    $proyectos = new Proyectos();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["pro_id"])){
                $tmp_dir = $_FILES['pro_logo']['tmp_name'];
                $imgFile = $_FILES['pro_logo']['name'];
                $imgSize = $_FILES['pro_logo']['size'];

                $tmp_dir2 = $_FILES['pro_imagen']['tmp_name'];
                $imgFile2 = $_FILES['pro_imagen']['name'];
                $imgSize2 = $_FILES['pro_imagen']['size'];

                $upload_dir = __DIR__.'/../public/img/proyectos/';
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                $imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION));

                $valid_extensions = array('jpeg', 'jpg', 'png');
                $logo = rand(1000,1000000).".".$imgExt;
                $portada = rand(1000,1000000).".".$imgExt2;

                if(in_array($imgExt, $valid_extensions) && in_array($imgExt2, $valid_extensions)){ 
                      
                    // Check file size '5MB'
                    if($imgSize < 5000000 && $imgSize2 < 5000000)    {
                        var_dump(move_uploaded_file($tmp_dir,$upload_dir.$logo));
                        move_uploaded_file($tmp_dir,$upload_dir.$logo);
                        move_uploaded_file($tmp_dir2,$upload_dir.$portada);
                    }
                    else{
                     $errMSG = "Sorry, your file is too large.";
                    }
                    if(!isset($errMSG)){
                        $proyectos->insert_proyectos($logo,$_POST["pro_nombre"],$_POST["pro_ciudad"],$_POST["pro_casas"],$_POST["pro_piscinas"],$_POST["pro_parques"],$_POST["pro_direccion"],$_POST["pro_tipo"],$portada,$_POST["pro_precio"]);
                        //$galeria->insert_galeria($userpic);
                    }
                }
            }else{
                
                $proyectos->update_proyectos($_POST["pro_id"],$_POST["pro_logo"],$_POST["pro_nombre"],$_POST["pro_ciudad"],$_POST["pro_casas"],$_POST["pro_piscinas"],$_POST["pro_parques"],$_POST["pro_direccion"],$_POST["pro_tipo"],$_POST["pro_imagen"],$_POST["pro_precio"]);
            }
            break;
        case "mostrar":
            $datos=$proyectos->get_proyectosXid($_POST["pro_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["pro_id"] = $row["pro_id"];
                    $output["pro_nombre"] = $row["pro_nombre"];
                    $output["pro_ciudad"] = $row["pro_ciudad"];
                    $output["pro_casas"] = $row["pro_casas"];
                    $output["pro_piscinas"] = $row["pro_piscinas"];
                    $output["pro_parques"] = $row["pro_parques"];
                    $output["pro_direccion"] = $row["pro_direccion"];
                    $output["pro_tipo"] = $row["pro_tipo"];
                    $output["pro_precio"] = $row["pro_precio"];
                }
                echo json_encode($output);
            }
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
                if($row["pro_tipo"] == 'V'){
                    $sub_array[] ="<p>Vis</p>";
                }else{  
                    $sub_array[] ="<p>No Vis</p>";
                } 
                $sub_array[] = $row["pro_precio"];
                if($row["est"] == '1'){
                    $sub_array[] = "<button type='button' onClick='pro_ina(".$row["pro_id"].");' class='btn btn-success btn-sm'>Activo</button>";
                }else{
                    $sub_array[] = "<button type='button' onClick='pro_act(".$row["pro_id"].");' class='btn btn-danger btn-sm'>Inactivo</button>";
                }
                $sub_array[] = '<button type="button" class="btn btn-outline-warning btn-icon" onClick="editar('.$row["pro_id"].')" id="'.$row["pro_id"].'"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" class="btn btn-outline-danger btn-icon" onClick="eliminar('.$row["pro_id"].')" id="'.$row["pro_id"].'"><div><i class="fa fa-trash"></i></div></button>';
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
        case "combo":
            $datos=$proyectos->get_proyectos();
            if(is_array($datos)==true and count($datos)>0){
                $html= " <option label='Seleccione'></option>";
                foreach($datos as $row){
                    $html.= "<option value='".$row['pro_id']."'>".$row['pro_nombre']."</option>";
                }
                echo $html;
            }
            break;
        case "activo":
            $proyectos->update_estadoActivo($_POST["pro_id"]);
            break;
        case "inactivo":
            $proyectos->update_estadoInactivo($_POST["pro_id"]);
            break;
    }
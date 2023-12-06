<?php
    require_once("../config/conexion.php");
    require_once("../models/Mntproyectos.php");
    $mntproyectos = new Mntproyectos();

    switch($_GET["opc"]){
        case "guardaryeditar":
            if(empty($_POST["mpro_id"])){
                $tmp_dir1 = $_FILES['mpro_imagen1']['tmp_name'];
                $imgFile1 = $_FILES['mpro_imagen1']['name'];
                $imgSize1 = $_FILES['mpro_imagen1']['size'];

                $tmp_dir2 = $_FILES['mpro_imagen2']['tmp_name'];
                $imgFile2 = $_FILES['mpro_imagen2']['name'];
                $imgSize2 = $_FILES['mpro_imagen2']['size'];

                $tmp_dir3 = $_FILES['mpro_imagen3']['tmp_name'];
                $imgFile3 = $_FILES['mpro_imagen3']['name'];
                $imgSize3 = $_FILES['mpro_imagen3']['size'];

                $tmp_dir4 = $_FILES['mpro_imagen4']['tmp_name'];
                $imgFile4 = $_FILES['mpro_imagen4']['name'];
                $imgSize4 = $_FILES['mpro_imagen4']['size'];

                $tmp_dir5 = $_FILES['mpro_imagen5']['tmp_name'];
                $imgFile5 = $_FILES['mpro_imagen5']['name'];
                $imgSize5 = $_FILES['mpro_imagen5']['size'];

                $tmp_dir6 = $_FILES['mpro_imagen6']['tmp_name'];
                $imgFile6 = $_FILES['mpro_imagen6']['name'];
                $imgSize6 = $_FILES['mpro_imagen6']['size'];

                $tmp_dir7 = $_FILES['mpro_imagen7']['tmp_name'];
                $imgFile7 = $_FILES['mpro_imagen7']['name'];
                $imgSize7 = $_FILES['mpro_imagen7']['size'];

                $tmp_dir8 = $_FILES['mpro_imagen8']['tmp_name'];
                $imgFile8 = $_FILES['mpro_imagen8']['name'];
                $imgSize8 = $_FILES['mpro_imagen8']['size'];

                $tmp_dir9 = $_FILES['mpro_imagen9']['tmp_name'];
                $imgFile9 = $_FILES['mpro_imagen9']['name'];
                $imgSize9 = $_FILES['mpro_imagen9']['size'];

                $tmp_dir10 = $_FILES['mpro_imagen10']['tmp_name'];
                $imgFile10 = $_FILES['mpro_imagen10']['name'];
                $imgSize10 = $_FILES['mpro_imagen10']['size'];

                $upload_dir = __DIR__.'/../public/img/proyectos/';
                $imgExt1 = strtolower(pathinfo($imgFile1,PATHINFO_EXTENSION));
                $imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION));
                $imgExt3 = strtolower(pathinfo($imgFile3,PATHINFO_EXTENSION));
                $imgExt4 = strtolower(pathinfo($imgFile4,PATHINFO_EXTENSION));
                $imgExt5 = strtolower(pathinfo($imgFile5,PATHINFO_EXTENSION));
                $imgExt6 = strtolower(pathinfo($imgFile6,PATHINFO_EXTENSION));
                $imgExt7 = strtolower(pathinfo($imgFile7,PATHINFO_EXTENSION));
                $imgExt8 = strtolower(pathinfo($imgFile8,PATHINFO_EXTENSION));
                $imgExt9 = strtolower(pathinfo($imgFile9,PATHINFO_EXTENSION));
                $imgExt10 = strtolower(pathinfo($imgFile10,PATHINFO_EXTENSION));

                $valid_extensions = array('jpeg', 'jpg', 'png');
                $imagen1 = rand(1000,1000000).".".$imgExt1;
                $imagen2 = rand(1000,1000000).".".$imgExt2;
                $imagen3 = rand(1000,1000000).".".$imgExt3;
                $imagen4 = rand(1000,1000000).".".$imgExt4;
                $imagen5 = rand(1000,1000000).".".$imgExt5;
                $imagen6 = rand(1000,1000000).".".$imgExt6;
                $imagen7 = rand(1000,1000000).".".$imgExt7;
                $imagen8 = rand(1000,1000000).".".$imgExt8;
                $imagen9 = rand(1000,1000000).".".$imgExt9;
                $imagen10 = rand(1000,1000000).".".$imgExt10;

                if(in_array($imgExt1, $valid_extensions) && in_array($imgExt2, $valid_extensions)
                && in_array($imgExt3, $valid_extensions) && in_array($imgExt4, $valid_extensions)
                && in_array($imgExt5, $valid_extensions) && in_array($imgExt6, $valid_extensions)
                && in_array($imgExt7, $valid_extensions) && in_array($imgExt8, $valid_extensions)
                && in_array($imgExt9, $valid_extensions) && in_array($imgExt10, $valid_extensions)){
                    // Check file size '5MB'
                    if($imgSize1 < 5000000 && $imgSize2 < 5000000 && $imgSize3 < 5000000 && $imgSize4 < 5000000 && $imgSize5 < 5000000 && $imgSize6 < 5000000 && $imgSize7 < 5000000 && $imgSize8 < 5000000 && $imgSize9 < 5000000 && $imgSize10 < 5000000)    {
                        //var_dump(move_uploaded_file($tmp_dir,$upload_dir.$logo));
                        move_uploaded_file($tmp_dir1,$upload_dir.$imagen1);
                        move_uploaded_file($tmp_dir2,$upload_dir.$imagen2);
                        move_uploaded_file($tmp_dir3,$upload_dir.$imagen3);
                        move_uploaded_file($tmp_dir4,$upload_dir.$imagen4);
                        move_uploaded_file($tmp_dir5,$upload_dir.$imagen5);
                        move_uploaded_file($tmp_dir6,$upload_dir.$imagen6);
                        move_uploaded_file($tmp_dir7,$upload_dir.$imagen7);
                        move_uploaded_file($tmp_dir8,$upload_dir.$imagen8);
                        move_uploaded_file($tmp_dir9,$upload_dir.$imagen9);
                        move_uploaded_file($tmp_dir10,$upload_dir.$imagen10);
                    }else{
                        $errMSG = "Sorry, your file is too large.";
                    }
                    if(!isset($errMSG)){
                        $mntproyectos->insert_mntproyectos($_POST["mpro_video"],$_POST["pro_id"],$_POST["mpro_descripcion"],$_POST["mpro_privada"],$_POST["mpro_const"],$_POST["mpro_alcobas"],$_POST["mpro_bannos"],$imagen1,$imagen2,$imagen3,$imagen4,$imagen5,$imagen6,$imagen7,$imagen8,$imagen9,$imagen10);
                    }
                }
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
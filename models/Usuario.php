<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["mail"];
                $password = $_POST["passwd"];
                if(empty($correo) and empty($password)){
                    header("Location:".Conectar::ruta()."login.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE usu_correo=? AND usu_pass=? AND est=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1,$correo);
                    $stmt->bindValue(2,$password);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_nombre"]=$resultado["usu_nombre"];
                        $_SESSION["usu_apep"]=$resultado["usu_apep"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];
                        header("Location:".Conectar::ruta()."home.php");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."login.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
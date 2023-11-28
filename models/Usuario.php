<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $usu_correo = $_POST["email"];
                $usu_pass = $_POST["pass"];
                if(empty($usu_correo) and empty($usu_pass)){
                    header("Location:".Conectar::ruta()."views/login.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE usu_correo=? AND usu_pass=? AND est=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1,$usu_correo);
                    $stmt->bindValue(2,$usu_pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_nombre"]=$resultado["usu_nombre"];
                        $_SESSION["usu_apep"]=$resultado["usu_apep"];
                        $_SESSION["usu_correo"]=$resultado["usu_correo"];
                        header("Location:".Conectar::ruta()."views/home.php");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."views/login.php?m=1");
                        exit();
                    }
                }
            }
        }

        public function get_usuarios(){}
        public function get_usuariosXid(){}
        public function insert_usuarios(){}
        public function update_usuarios(){}
        public function delete_usuarios(){}
    }
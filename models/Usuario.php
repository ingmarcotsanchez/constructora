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

        public function get_usuarios(){
            $usuario = parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM usuarios";
            $sql=$usuario->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_usuariosXid($usu_id){
            $usuario=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM usuarios WHERE usu_id=?";
            $sql=$usuario->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_usuarios($usu_foto,$usu_nombre,$usu_apep,$usu_apem,$usu_correo,$usu_pass,$usu_telf){
            $usuario=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO usuarios(usu_id,usu_foto,usu_nombre,usu_apep,usu_apem,usu_correo,usu_pass,usu_telf,est)
                    VALUES(NULL,?,?,?,?,?,?,?,1)";
            $sql=$usuario->prepare($sql);
            $sql->bindValue(1,$usu_foto);
            $sql->bindValue(2,$usu_nombre);
            $sql->bindValue(3,$usu_apep);
            $sql->bindValue(4,$usu_apem);
            $sql->bindValue(5,$usu_correo);
            $sql->bindValue(6,$usu_pass);
            $sql->bindValue(7,$usu_telf);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_perfil($usu_id,$usu_nombre,$usu_apep,$usu_apem,$usu_correo,$usu_pass,$usu_telf){
            $usuario=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                    SET usu_nombre=?,
                        usu_apep=?,
                        usu_apem=?,
                        usu_correo=?,
                        usu_pass=?,
                        usu_telf=?
                    WHERE usu_id=?";
            $sql=$usuario->prepare($sql);
            $sql->bindValue(1,$usu_nombre);
            $sql->bindValue(2,$usu_apep);
            $sql->bindValue(3,$usu_apem);
            $sql->bindValue(4,$usu_correo);
            $sql->bindValue(5,$usu_pass);
            $sql->bindValue(6,$usu_telf);
            $sql->bindValue(7,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_usuarios($usu_id,$usu_foto,$usu_nombre,$usu_apep,$usu_apem,$usu_correo,$usu_pass,$usu_telf){
            $usuario=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios
                    SET usu_foto=?,
                        usu_nombre=?,
                        usu_apep=?,
                        usu_apem=?,
                        usu_correo=?,
                        usu_pass=?,
                        usu_telf=?
                    WHERE usu_id=?";
            $sql=$usuario->prepare($sql);
            $sql->bindValue(1,$usu_foto);
            $sql->bindValue(2,$usu_nombre);
            $sql->bindValue(3,$usu_apep);
            $sql->bindValue(4,$usu_apem);
            $sql->bindValue(5,$usu_correo);
            $sql->bindValue(6,$usu_pass);
            $sql->bindValue(7,$usu_telf);
            $sql->bindValue(8,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_usuarios($usu_id){
            $usuario=parent::Conexion();
            parent::set_names();
            $sql="UPDATE usuarios SET est=0 WHERE usu_id=?";
            $sql=$usuario->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_estadoActivo($usu_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est=1 WHERE usu_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function update_estadoInactivo($usu_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE usuarios SET est=0 WHERE usu_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function total_clientes(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM clientes WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function total_proyectos(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT count(*) as total FROM proyectos WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
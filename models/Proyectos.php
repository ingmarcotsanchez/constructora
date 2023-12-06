<?php 
    class Proyectos extends Conectar{
        public function get_proyectos(){
            $proyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM proyectos";
            $sql=$proyectos->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_proyectosXid($pro_id){
            $proyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM proyectos WHERE pro_id=?";
            $sql=$proyectos->prepare($sql);
            $sql->bindValue(1,$pro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_proyectos($pro_logo,$pro_nombre,$pro_ciudad,$pro_casas,$pro_piscinas,$pro_parques,$pro_direccion,$pro_tipo,$pro_imagen,$pro_precio){
            $proyectos=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO proyectos(pro_id,pro_logo,pro_nombre,pro_ciudad,pro_casas,pro_piscinas,pro_parques,pro_direccion,pro_tipo,pro_imagen,pro_precio,est)
                    VALUES(NULL,?,?,?,?,?,?,?,?,?,1)";
            $sql=$proyectos->prepare($sql);
            $sql->bindValue(1,$pro_logo);
            $sql->bindValue(2,$pro_nombre);
            $sql->bindValue(3,$pro_ciudad);
            $sql->bindValue(4,$pro_casas);
            $sql->bindValue(5,$pro_piscinas);
            $sql->bindValue(6,$pro_parques);
            $sql->bindValue(7,$pro_direccion);
            $sql->bindValue(8,$pro_tipo);
            $sql->bindValue(9,$pro_imagen);
            $sql->bindValue(10,$pro_precio);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_proyectos($pro_id,$pro_logo,$pro_nombre,$pro_ciudad,$pro_casas,$pro_piscinas,$pro_parques,$pro_direccion,$pro_tipo,$pro_imagen,$pro_precio){
            $proyectos=parent::Conexion();
            parent::set_names();
            $sql="UPDATE proyectos
                    SET 
                    pro_logo=?,
                    pro_nombre=?,
                    pro_ciudad=?,
                    pro_casas=?,
                    pro_piscinas=?,
                    pro_parques=?,
                    pro_direccion=?,
                    pro_tipo=?,
                    pro_imagen=?,
                    pro_precio=?
                    WHERE pro_id=?";
            $sql=$proyectos->prepare($sql);
            $sql->bindValue(1,$pro_logo);
            $sql->bindValue(2,$pro_nombre);
            $sql->bindValue(3,$pro_ciudad);
            $sql->bindValue(4,$pro_casas);
            $sql->bindValue(5,$pro_piscinas);
            $sql->bindValue(6,$pro_parques);
            $sql->bindValue(7,$pro_direccion);
            $sql->bindValue(8,$pro_tipo);
            $sql->bindValue(9,$pro_imagen);
            $sql->bindValue(10,$pro_precio);
            $sql->bindValue(11,$pro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_proyectos($pro_id){
            $proyectos=parent::Conexion();
            parent::set_names();
            $sql="UPDATE proyectos SET est=0 WHERE pro_id=?";
            $sql=$proyectos->prepare($sql);
            $sql->bindValue(1,$pro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_estadoActivo($pro_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE proyectos SET est=1 WHERE pro_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$pro_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function update_estadoInactivo($pro_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE proyectos SET est=0 WHERE pro_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$pro_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
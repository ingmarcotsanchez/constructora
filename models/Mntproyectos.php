<?php
    class Mntproyectos extends Conectar{
        public function get_mntproyectos(){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM mntproyectos";
            $sql=$mntproyectos->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_mntproyectosXid($mpro_id){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM mntproyectos WHERE mpro_id=?";
            $sql=$mntproyectos->prepare($sql);
            $sql->bindValue(1,$mpro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_mntproyectosDetalle(){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT
            mntproyectos.mpro_id,
            mntproyectos.mpro_video,
            proyectos.pro_id,
            proyectos.pro_nombre,
            proyectos.pro_ciudad,
            proyectos.pro_imagen,
            proyectos.pro_direccion,
            proyectos.pro_precio,
            mntproyectos.mpro_descripcion,
            mntproyectos.mpro_privada,
            mntproyectos.mpro_const,
            mntproyectos.mpro_alcobas,
            mntproyectos.mpro_bannos,
            mntproyectos.est
            FROM mntproyectos
            INNER JOIN proyectos on mntproyectos.pro_id = proyectos.pro_id";
            $sql=$mntproyectos->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_mntproyectosDetallexid($pro_id){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT
            mntproyectos.mpro_id,
            mntproyectos.mpro_video,
            proyectos.pro_id,
            proyectos.pro_nombre,
            proyectos.pro_ciudad,
            proyectos.pro_imagen,
            proyectos.pro_direccion,
            proyectos.pro_precio,
            mntproyectos.mpro_descripcion,
            mntproyectos.mpro_privada,
            mntproyectos.mpro_const,
            mntproyectos.mpro_alcobas,
            mntproyectos.mpro_bannos,
            mntproyectos.est
            FROM mntproyectos
            INNER JOIN proyectos on mntproyectos.pro_id = proyectos.pro_id
            WHERE mntproyectos.pro_id = ?";
            $sql=$mntproyectos->prepare($sql);
            $sql->bindValue(1,$pro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_mntproyectos($mpro_video,$pro_id,$mpro_descripcion,$mpro_privada,$mpro_const,$mpro_alcobas,$mpro_bannos,$mpro_imagen1,$mpro_imagen2,$mpro_imagen3,$mpro_imagen4,$mpro_imagen5,$mpro_imagen6,$mpro_imagen7,$mpro_imagen8,$mpro_imagen9,$mpro_imagen10){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO mntproyectos(mpro_id,mpro_video,pro_id,mpro_descripcion,mpro_privada,mpro_const,mpro_alcobas,mpro_bannos,mpro_imagen1,mpro_imagen2,mpro_imagen3,mpro_imagen4,mpro_imagen5,mpro_imagen6,mpro_imagen7,mpro_imagen8,mpro_imagen9,mpro_imagen10,est)
                    VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,1)";
            $sql=$mntproyectos->prepare($sql);
            $sql->bindValue(1,$mpro_video);
            $sql->bindValue(2,$pro_id);
            $sql->bindValue(3,$mpro_descripcion);
            $sql->bindValue(4,$mpro_privada);
            $sql->bindValue(5,$mpro_const);
            $sql->bindValue(6,$mpro_alcobas);
            $sql->bindValue(7,$mpro_bannos);
            $sql->bindValue(8,$mpro_imagen1);
            $sql->bindValue(9,$mpro_imagen2);
            $sql->bindValue(10,$mpro_imagen3);
            $sql->bindValue(11,$mpro_imagen4);
            $sql->bindValue(12,$mpro_imagen5);
            $sql->bindValue(13,$mpro_imagen6);
            $sql->bindValue(14,$mpro_imagen7);
            $sql->bindValue(15,$mpro_imagen8);
            $sql->bindValue(16,$mpro_imagen9);
            $sql->bindValue(17,$mpro_imagen10);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_mntproyectos($mpro_id,$mpro_video,$pro_id,$mpro_descripcion,$mpro_privada,$mpro_const,$mpro_alcobas,$mpro_bannos,$mpro_imagen1,$mpro_imagen2,$mpro_imagen3,$mpro_imagen4,$mpro_imagen5,$mpro_imagen6,$mpro_imagen7,$mpro_imagen8,$mpro_imagen9,$mpro_imagen10){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="UPDATE mntproyectos
                    SET mpro_video=?,
                        pro_id=?,
                        mpro_descripcion=?,
                        mpro_privada=?,
                        mpro_const=?,
                        mpro_alcobas=?,
                        mpro_bannos=?,
                        mpro_imagen1=?,
                        mpro_imagen2=?,
                        mpro_imagen3=?,
                        mpro_imagen4=?,
                        mpro_imagen5=?,
                        mpro_imagen6=?,
                        mpro_imagen7=?,
                        mpro_imagen8=?,
                        mpro_imagen9=?,
                        mpro_imagen10=?
                    WHERE mpro_id=?";
            $sql=$mntproyectos->prepare($sql);
            $sql->bindValue(1,$mpro_video);
            $sql->bindValue(2,$pro_id);
            $sql->bindValue(3,$mpro_descripcion);
            $sql->bindValue(4,$mpro_privada);
            $sql->bindValue(5,$mpro_const);
            $sql->bindValue(6,$mpro_alcobas);
            $sql->bindValue(7,$mpro_bannos);
            $sql->bindValue(8,$mpro_imagen1);
            $sql->bindValue(9,$mpro_imagen2);
            $sql->bindValue(10,$mpro_imagen3);
            $sql->bindValue(11,$mpro_imagen4);
            $sql->bindValue(12,$mpro_imagen5);
            $sql->bindValue(13,$mpro_imagen6);
            $sql->bindValue(14,$mpro_imagen7);
            $sql->bindValue(15,$mpro_imagen8);
            $sql->bindValue(16,$mpro_imagen9);
            $sql->bindValue(17,$mpro_imagen10);
            $sql->bindValue(18,$mpro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();}
        public function delete_mntproyectos($mpro_id){
            $mntproyectos=parent::Conexion();
            parent::set_names();
            $sql="UPDATE mntproyectos SET est=0 WHERE mpro_id=?";
            $sql=$mntproyectos->prepare($sql);
            $sql->bindValue(1,$mpro_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_estadoActivo($mpro_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE mntproyectos SET est=1 WHERE mpro_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$mpro_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function update_estadoInactivo($mpro_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE mntproyectos SET est=0 WHERE mpro_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$mpro_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
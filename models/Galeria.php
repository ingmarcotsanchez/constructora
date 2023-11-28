<?php
    class Galeria extends Conectar{
        public function get_galeria(){
            $galeria=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM galeria";
            $sql=$galeria->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_galeriaXid($gal_id){
            $galeria=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM galeria WHERE gal_id=?";
            $sql=$galeria->prepare($sql);
            $sql->bindValue(1,$gal_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_galeria($gal_imagen){
            $galeria=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO galeria (gal_id, gal_imagen, est) VALUES(NULL,?,1)";
            $sql=$galeria->prepare($sql);
            $sql->bindValue(1,$gal_imagen);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_galeria($gal_id,$gal_imagen){
            $galeria=parent::Conexion();
            parent::set_names();
            $sql="UPDATE galeria 
                    SET 
                    gal_imagen=? 
                    WHERE gal_id=?";
            $sql=$galeria->prepare($sql);
            $sql->bindValue(1,$gal_imagen);
            $sql->bindValue(2,$gal_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_galeria($gal_id){
            $galeria=parent::Conexion();
            parent::set_names();
            $sql="UPDATE galeria SET est=0 WHERE gal_id=?";
            $sql=$galeria->prepare($sql);
            $sql->bindValue(1,$gal_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
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
        public function insert_galeria(){}
        public function update_galeria(){}
        public function delete_galeria(){}
    }
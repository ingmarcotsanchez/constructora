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
        public function insert_mntproyectos(){}
        public function update_mntproyectos(){}
        public function delete_mntproyectos(){}
    }
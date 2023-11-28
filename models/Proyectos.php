<?php 
    class Proyectos extends Conectar{
        public function get_proyectos(){
            $proyectos=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM galeria";
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
        public function insert_proyectos(){}
        public function update_proyectos(){}
        public function delete_proyectos(){}
    }
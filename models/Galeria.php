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
        public function get_galeria_index(){
            $galeria=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM galeria WHERE est=1";
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
            $img= new Galeria();
            $gal_imagen = '';
            if ($_FILES["gal_imagen"]["name"]!=''){
                $gal_imagen=$img->upload_file_galeria();
            }
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
            $sql="DELETE FROM galeria WHERE gal_id=?";
            $sql=$galeria->prepare($sql);
            $sql->bindValue(1,$gal_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_estadoActivo($gal_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE galeria SET est=1 WHERE gal_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$gal_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function update_estadoInactivo($gal_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE galeria SET est=0 WHERE gal_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$gal_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function upload_file_galeria(){
            if(isset($_FILES["gal_imagen"])){
                $extension = explode('.', $_FILES['gal_imagen']['name']);
                $new_name = rand() . '.' . $extension[1];
                $destination = '../public/img/galeria/' . $new_name;
                move_uploaded_file($_FILES['gal_imagen']['tmp_name'], $destination);
                return "../public/img/galeria/".$new_name;
            }
        }
    }
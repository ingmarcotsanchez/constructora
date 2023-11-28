<?php
    class Clientes extends Conectar{
        public function get_clientes(){
            $clientes=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM clientes";
            $sql=$clientes->prepare($sql);
            $sql->execute();
            return $respuesta=$sql->fetchAll();
        }
        public function get_clientes_top5(){
            $clientes=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM clientes limit 5";
            $sql=$clientes->prepare($sql);
            $sql->execute();
            return $respuesta=$sql->fetchAll();
        }
        public function get_clientesXid($cli_id){
            $clientes=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM clientes WHERE cli_id=?";
            $sql=$clientes->prepare($sql);
            $sql->bindValue(1,$cli_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function delete_clientes($cli_id){
            $clientes=parent::Conexion();
            parent::set_names();
            $sql="UPDATE clientes SET est=0 WHERE cli_id=?";
            $sql=$clientes->prepare($sql);
            $sql->bindValue(1,$cli_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function insert_clientes($cli_nombre, $cli_correo, $cli_telef, $cli_asunto, $cli_mensaje){
            $clientes=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO clientes(cli_id, cli_nombre, cli_correo, cli_telef, cli_asunto, cli_mensaje, est)
                    VALUES(NULL,?,?,?,?,?,1)";
            $sql=$clientes->prepare($sql);
            $sql->bindValue(1,$cli_nombre);
            $sql->bindValue(2,$cli_correo);
            $sql->bindValue(3,$cli_telef);
            $sql->bindValue(4,$cli_asunto);
            $sql->bindValue(5,$cli_mensaje);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function update_clientes($cli_id, $est){
            $clientes=parent::Conexion();
            parent::set_names();
            $sql="UPDATE clientes
                    SET
                        est=?
                    WHERE cli_id=?";
            $sql=$clientes->prepare($sql);
            $sql->bindValue(1,$est);
            $sql->bindValue(2,$cli_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
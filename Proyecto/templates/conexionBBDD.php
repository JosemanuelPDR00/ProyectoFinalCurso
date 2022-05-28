<?php 

    class Conexion{
        //VARIABLES DE CONEXION
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "bbddProyecto";
        private $conexion;

        public static function conectar(){
            $conexionCompleta = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";

            try{
                $this->conexion = new PDO($conexionCompleta,$this->user,$this->password);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexxion->exec("SET CHARACTER SET UTF8");
            }catch(Exception $e){
                $this->conexion="Error de conexión";
                echo "ERROR: ".$e->getMessage();
            }
            return $conexion;
        }
    }

    // IMPORTAR LA CONEXION A LA BASE DE DATOS
    
    // require_once("");
    // $conexion = new Conexion();

?>
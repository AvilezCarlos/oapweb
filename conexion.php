<?php 

class Conexion{	  
    public static function Conectar() {   
        $localhost = "bsyffxelnsbjnvlulpoq-mysql.services.clever-cloud.com";
    $username = "ujznk78nqdfxhadg";
    $password = "FjcUrjdT37vwK82JTm4l";
    $database = "bsyffxelnsbjnvlulpoq";
        define('servidor', $localhost);
        define('nombre_bd', $database);
        define('usuario', $username);
        define('password', $password);					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}
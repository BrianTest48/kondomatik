<?php
class Conectar{
    protected $dbh;

    protected function Conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=db_kondamatik", "root", "");
            return $conectar;
        } catch(Exception $e){
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public static function ruta(){
        //Local
        return "http://localhost/kondomatik/";
        //Produccion
        //return "http://www.tudominio.com/";
    }
}
?>

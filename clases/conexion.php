<?php 
class Conexion extends PDO { 
    private $db;
    private $host;
    private $user;
    private $password;
    private $database;
    public function __construct() {
       //Sobreescribo el método constructor de la clase PDO.
    $listadatos = $this->datosConexion();
        foreach ($listadatos as $key => $value) {$this->host = $value['host'];
            $this->db = $value['db'];
            $this->host = $value['host'];
            $this->user = $value['user'];
            $this->password = $value['password'];
            $this->database = $value['database'];

        }
        try{
            parent::__construct("{$this->db}:dbname={$this->database};host={$this->host};charset=utf8", $this->user, $this->password);
        }catch(PDOException $e){
            echo 'Error al conectar con la base de datos. Detalle: ' . $e->getMessage();
        exit;
        }
    } 
    private function datosConexion(){
        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion . "/" . "config");
        return json_decode($jsondata, true);
    }

} 
?>
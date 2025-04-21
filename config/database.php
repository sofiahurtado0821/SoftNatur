<?php

class Database{
    private $host = "localhost:33067";
    private $db_name = "db_naturista";
    private $user = "root";
    private $password = "";
    public $conn;

    public function connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->user, $this->password);
            $this->conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
        }catch(Exception $e){
            echo "No conexion exitosa".$e->getMessage();
        }
        return $this->conn;
    }
}


?>
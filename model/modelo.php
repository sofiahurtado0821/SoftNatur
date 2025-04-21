<?php
require_once("C:/xampp/htdocs/SoftNatur/config/database.php");

class userModel{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getUser(){
        $query = "SELECT * FROM usuarios ORDER BY id";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($nombre, $clave, $correo){
        $query = "INSERT INTO usuarios (nombre, clave, correo) VALUES (:nombre, :clave, :correo)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":clave",$clave);
        $stmt->bindParam(":correo",$correo);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function validateUser($correo, $clave){
        $query = "SELECT * FROM usuarios WHERE correo = :correo";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":correo",$correo);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && $clave === $user['clave']){
            return $user;
        }
        return false;
    }

    public function updateUser($id,$nombre,$clave,$numTelefono,$correo){
        $query = "UPDATE usuarios SET nombre = :nombre, clave = :clave, numTelefono = :numTelefono, correo = :correo WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":clave",$clave);
        $stmt->bindParam(":numTelefono",$numTelefono);
        $stmt->bindParam(":correo",$correo);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function deleteUser($id){
        $query = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function checkUserExists($correo) {
        $query = "SELECT COUNT(*) FROM usuarios WHERE correo = :correo";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":correo", $correo);
        $stmt->execute();
    
        if ($stmt->fetchColumn() > 0) {
            return true;
        }
        return false;
    }
}



?>
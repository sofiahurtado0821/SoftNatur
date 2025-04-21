<?php

require_once("C:/xampp/htdocs/SoftNatur/model/modelo.php");

class userController{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function getUser(){
        return $this->userModel->getUser();
    }

    public function addUser($nombre, $clave, $correo){
        if($this->userModel->addUser($nombre, $clave, $correo)){
            header("Location: /SoftNatur/views/login.php");
            exit();
        }else{
            echo "No se pudo agregar el usuario";
        }
    }

    public function validateUser($correo, $clave){
        $usuario = $this->userModel->validateUser($correo, $clave);
        if($usuario){
            header("Location: /SoftNatur/views/producto.php");
            exit();
        }else {
            return "Correo o clave incorrectos";
        }
    }

    public function deleteUser($id){
        if($this->userModel->deleteUser($id)){
            echo "Eliminado exitosamente";
        }else{
            echo "Error al eliminar usuario";
        }
    }

    public function checkUserExists($correo) {
        return $this->userModel->checkUserExists($correo);
    }
}

?>
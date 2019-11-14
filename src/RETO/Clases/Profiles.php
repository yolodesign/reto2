<?php
class Profiles{

    private $nombre;
    private $apellido;
    private $telefono;
    private $fechaNacimiento;
    private $genero;
    private $email;
    private $password;
    private $profImage;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public  function setApellido($apellido){
        $this->apellido =  $apellido;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento){
        $this ->fechaNacimiento = $fechaNacimiento;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getProfImage(){
        return $this->profImage;
    }

    public function setProfImage($profImage){
        $this->profImage = $profImage;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword(){
        return $this->genero;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}
?>

<?php
/*
abstract class Persona{
    static  $idioma;
    //constructor, unión de tipos
    public function __construct(
       public string|int $nombre="",
       public string $apellido="",
       public int|float $edad=0,
       private string $telefono=""
    ){
    }

    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono = $this->validarTelefono($telefono);
    }
    //otra forma de usar get and set metodos magicos
    public function __get($name){
        return $this->$name;
    }
    public funtion __set($name,$value){
        switch($name){
            case "telefono":
                return $this->$name=
                $this->validarTelefono($value);
        default:
            return $this->$name=$value;
        }
    }

    function hablar($tema){
        echo "Soy",$this->nombre,"y hablo de $tema ", $this->temaEsExtenso($tema);
    }
    function ver(){
    }

    function cantar(){
    }
    //Encapsulamiento
    private function temaEsExtenso($tema){
        return ($tema=="Politica")?"tema extenso":"tema no extenso";
    }

    private function validarTelefono($telefono){
        if(preg_match('/^[0-9]{10}$/',$telefono)){
            return $telefono;
        }else{
            return "Estructura Incorrecta";
        }
    }

    public function __destruct(){
        echo "Finaliza el objeto";
    }
}

}
*/

?>


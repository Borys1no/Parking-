<?php
class Persona{
    public $nombre = array();
    public $apellido = array();

    public function guardar($nombre, $apellido){
        $this->nombre[]= $nombre;
        $this ->apellido[] = $apellido;

    }

    public function mostrar(){
        for($i= 0; $i < count($this->nombre); $i++){
            $this->formato($this->nombre[$i], $this->apellido[$i]);
            

        }


    }

    public function formato($nombre, $apellido){
        echo "Nombre : ", $nombre , " | Apellido : " ,$apellido , "<br>";

    }
}
$persona = new Persona();
$persona->guardar("Borys", "Cereceda");
$persona->guardar("Natividad", "Bedoya");
$persona->mostrar();




?>
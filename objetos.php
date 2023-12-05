<?php


class Animal {
    public $nombre;
    public $tipo;
    public $edad;
    public $sonido;

    public function __construct($nombre, $tipo, $edad, $sonido) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->edad = $edad;
        $this->sonido= $sonido;
    }

   public function obtenerAtributos() {
        return "Nombre: " . $this->nombre . "<br>" .
               "Tipo: " . $this->tipo . "<br>" .
               "Edad: " . $this->edad . " años" .  "<br>" .
               "Sonido: ". $this->sonido .  "<br>" ;
    }
    public function felizCumpleaños(){
        echo "<br>" ;
        echo "Feliz Cumpleaños " . $this->nombre . " !!!!<br>";
        echo "Tenia " .  $this->edad . " años" . "<br>";
        $this->edad= $this->edad +1;
        echo "Ahora tiene " .  $this->edad . " años" . "<br>";

    }

    public function hablar(){
        return this->sonido;
    }
}

// se crean los 5 objetos
$animalUno = new Animal('Pancho', 'gato', 3, 'miau');
$animalDos = new Animal('Salma', 'perro', 6, 'guau');
$animalTres = new Animal('Dolly', 'oveja', 2, 'meee');
$animalCuatro = new Animal('Teresa', 'vaca', 6, 'muuu');
$animalCinco = new Animal('Legui', 'caballo', 7, 'hiiii');

//
$animales = array($animalUno , $animalDos, $animalTres, $animalCuatro,$animalCinco );

// se solicita informacion sobre los objetos del array 
echo "<br>" . "----------------Se solicita informacion sobre los objetos del array -----------" . "<br>";
 
foreach($animales as $animal){
    echo "<br>" ;
    echo $animal->obtenerAtributos();
    echo "<br>" ;
    echo "<br>" ;
}

echo "<br>" . "---------------- cargamos los animales en otro array -----------" . "<br>";

$array = array();
array_push($array,$animalUno);
array_push($array,$animalDos);
array_push($array,$animalTres);
array_push($array,$animalCuatro);
array_push($array,$animalCinco);

echo "<br>" . "----------------Le cantamos el feliz cumple!!!-----------" . "<br>";

foreach($array as $a){
    echo "<br>" ;
    echo $a->obtenerAtributos();
    $a->felizCumpleaños();
    echo "<br>" ;
    echo $a->hablar() . " !!!! ". $a->hablar(). " !!!!";

    echo "<br>" ;
}



?>
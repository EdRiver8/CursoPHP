<?php
    class Car{
        public $wheels = 4; //al alcance de todo el programa
        protected $hood = 1;//solo al alcance de esta clase o sus hijas
        private $engine = 1;//solo al alcance de esta clase
        var $doors = 4;//al alcance de todo el programa
        static $cantidadCar = 0;//como se usa???

        function __construct($intWheels = 4, $intDoors = 4){
            $this->wheels = $intWheels;
            $this->doors = $intDoors;
            Car::$cantidadCar++;
        }
        
        function moveWheels(){
            echo "Wheels ara in moving!";
        }

        //metodos accesores 
        function getHood(){
            return $this -> hood;
        }   
    }
    //herencia
    class moto extends Car{
        public $wheels = 2;//no sirve
    }

    $bmw = new Car();
    echo "BMW" . "<br>";
    echo $bmw -> wheels . "<br>";
    echo $bmw -> doors . "<br>";
    //echo $bmw -> hood . "<br>";
    echo $bmw -> getHood() . "<br>";
    echo $bmw -> moveWheels() . "<br>";  
    
    $merced = new Car(5, 2);
    echo "Merced" . "<br>";
    echo $merced -> wheels . "<br>";
    echo $merced -> doors . "<br>";

    $suzu = new moto();
    echo "Moto" . "<br>";
    echo $suzu -> wheels . "<br>";
    echo $suzu -> doors . "<br>";
?>
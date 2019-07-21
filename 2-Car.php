<?php

    require_once ("3-Vehicle.php");

    class Car extends Vehicle
    {
       //public $doors;  atributos
       private $doors; 

       public function setDoors($doors)  // métodos , alterar o valor
       {
          $this->doors = $doors;
       }
       public function getDoors()  // métodos , alterar o valor
       {
          return $this->doors;
         
       }

       public function getBrand()
       {
          return $this->brand;
       }
    }
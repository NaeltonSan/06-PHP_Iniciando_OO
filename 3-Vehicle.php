<?php

    class Vehicle 
    {
        public $brand;      //atributos
        public $color;
        public $engine;

        public function getEngine($type = "horsepower")  //métodos
        {
            return "{$this->engine} {$type}"; 
        }
    }
    
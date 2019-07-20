<?php

    class Vehicle 
    {
        public $brand;      //atributos
        public $color;
        public $engine;

        public function __construct($brand = null, $color = null)// setando valor padrão para estes parametros
        {
            $this->brand = $brand;
            $this->color = $color;
        }
        

        public function getEngine($type = "horsepower")  //métodos
        {
            return "{$this->engine} {$type}"; 
        }
    }
    
    
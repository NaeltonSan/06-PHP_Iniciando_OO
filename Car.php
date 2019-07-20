<?php

    class Car 
    {
        public $brand;      //atributos
        public $color;
        public $engine;

        public function getEngine()
        {
            return $this->engine. " horsepower"; 
        }
    }
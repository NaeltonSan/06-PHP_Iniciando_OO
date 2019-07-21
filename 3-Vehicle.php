<?php

    class Vehicle 
    {
        public $brand;      //atributos
        protected $color;  // protected , vai permitir acesso dentro da classe pai e tb classe filho
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
    
    
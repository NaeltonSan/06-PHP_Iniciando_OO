<?php

    require_once("3-Vehicle.php");

    class Motorcycle  extends Vehicle
    {
        public function __construct($brand = null, $color = null)// setando valor padrão para estes parametros
        {
            parent::__construct($brand,strtoupper($color));
        }
    }
    
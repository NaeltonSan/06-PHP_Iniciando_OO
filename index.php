<?php
    require_once ("Car.php");

    $ferrari = new Car;
    $ferrari->brand = "Ferrari";
    $ferrari->color = "Red";
    $ferrari->engine = 300;

    $mustang = new Car;
    $mustang->brand = "Mustang";
    $mustang->color = "Blue";
    $mustang->engine = 200;
     
    //echo $ferrari->brand;
    // var_dump($ferrari);
    // var_dump($mustang);

    echo $mustang->getEngine();
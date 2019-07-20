<?php
    require_once ("2-Car.php");
    require_once ("4-Motorcycle.php");

    $ferrari = new Car;
    $ferrari->brand = "Ferrari";
    $ferrari->color = "Red";
    $ferrari->engine = 300;
    $ferrari->doors = 2;

    $mustang = new Car;
    $mustang->brand = "Mustang";
    $mustang->color = "Blue";
    $mustang->engine = 200;
    $mustang->doors = 4;

    $moto = new Motorcycle;
    $moto->brand = "Honda";
    $moto->color = "Yellow";
    $moto->engine = 200;
     
    //echo $ferrari->brand;
    // var_dump($ferrari);
    // var_dump($mustang);

    //echo $mustang->getEngine();

    //echo $ferrari->getEngine();


    
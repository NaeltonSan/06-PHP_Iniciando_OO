<?php
    require_once ("2-Car.php");
    require_once ("4-Motorcycle.php");

    //   $ferrari = new Car('Ferrari'); // color vem como null
    // $ferrari->brand = "Ferrari";
    // $ferrari->color = "Red";
    
    $ferrari = new Car("Ferrari", "Red"); // color vem como Red

    

    //echo $ferrari->getEngine();

    echo $ferrari->color;
    


    
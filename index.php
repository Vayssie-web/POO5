<?php

//                  CARS              //

require_once 'Car.php';
require_once 'Bicycle.php';

use car;
use Bicycle;

$ferrari= new Car ('blue', 4, 'fuel');
$ferrari->setParkBrake(true);
//var_dump($ferrari);
try {
    echo $ferrari->start();
}
catch(Exception $e) {
    echo "Exception received: ". $e->getMessage() . '<br>';
    $ferrari->setParkBrake(false);
}
finally {
    echo "My car's rolling like a donut !";
}
//var_dump($ferrari);

$ferrari->switchOn();
var_dump($ferrari);

$velib = new Bicycle ('red', 1);
$velib->switchOn();
var_dump($velib);
$velib->setCurrentSpeed(15);
$velib->switchOn();
var_dump($velib);
<?php

namespace Gerhard;

use Gerhard\Boat;
use Gerhard\Car;
use Gerhard\Airplane;

if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/vendor/autoload.php';

    start_cars();
}

function start_cars()
{
    $vehicles = [
        new Car(), new Boat(), new Airplane(),
    ];

    echo '<h2>Vehicles</h2>';

    echo '<pre>';
    var_dump($vehicles);
    echo '</pre>';

    foreach( $vehicles as $vehicle ) {
        echo $vehicle->run();
    }
}
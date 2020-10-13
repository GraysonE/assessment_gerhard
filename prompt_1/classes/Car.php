<?php


namespace Gerhard;

use Gerhard\Vehicle;


class Car extends Vehicle
{

    public function __construct()
    {
//        $this->has_fuel = false; // Default will set this
        $this->has_keys = true;

    }

}
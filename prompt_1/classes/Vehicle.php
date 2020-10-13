<?php


namespace Gerhard;

// each vehicle type may not have keys or fuel by default.
// As the mechanic, it’s your job to start the vehicle,
// So I can execute run() on each one so they all return vrooom.

class Vehicle
{

    public $has_keys = false;
    public $has_fuel = false;

    public function __construct()
    {

    }

    public function run() {
        return 'vroom';
    }

}
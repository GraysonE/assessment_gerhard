<?php


namespace Gerhard;

/**
 * Class Vehicle
 * @package Gerhard
 */
class Vehicle
{

    /**
     * @var bool
     */
    protected $has_keys = false;
    /**
     * @var bool
     */
    protected $has_fuel = false;

    /**
     * Vehicle constructor.
     */
    public function __construct()
    {

    }

    /**
     * Runs the car and gives helpful confirmation dialogue.
     *
     * @return string
     */
    public function run()
    {

        $this->start();

        if ($this->has_fuel && $this->has_keys) {
            return 'vroom';
        }
    }

    /**
     * Adds fuel to the vehicle.
     */
    public function add_fuel()
    {
        $this->has_fuel = true;
    }

    /**
     * Adds keys to the vehicle.
     */
    public function turn_key()
    {
        $this->has_keys = true;
    }

    /**
     * Adds missing components to Vehicle in order for it to run().
     */
    public function start()
    {
        if (!$this->has_fuel) {
            $this->add_fuel();
        }

        if (!$this->has_keys) {
            $this->turn_key();
        }
    }

}
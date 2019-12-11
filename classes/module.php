<?php

use function Sodium\crypto_aead_chacha20poly1305_decrypt;

class Module{
    private $mass = 0;
    private $fuelRequired = 0;

    public function __Construct($mass){
        $mass = (int)$mass;
        $this->mass = $mass;
        $this->calculateFuelRequired($mass);
    }

    /**
     * @return mixed
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * @param mixed $mass
     */
    public function setMass($mass)
    {
        $this->mass = $mass;
    }

    /**
     * @return mixed
     */
    public function getFuelRequired()
    {
        return $this->fuelRequired;
    }

    /**
     * @param mixed $fuelRequired
     */
    public function setFuelRequired($fuelRequired)
    {
        $this->fuelRequired = $fuelRequired;
    }

    public function calculateFuelRequired($mass){
        while((floor($mass / 3) - 2) >= 0){
            $mass = floor($mass / 3) - 2;
            $this->fuelRequired += $mass;
        }
    }

}
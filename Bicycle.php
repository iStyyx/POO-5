<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        if ($this->currentSpeed < 10) {
            return "Pédale pédale !";
        } return true;
    }

    public function switchOff(): bool 
    {
        return false;
    }
}
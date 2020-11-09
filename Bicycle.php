<?php

// namespace Bicycle;  

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle  extends Vehicle implements LightableInterface
{
    public function switchOn():bool
    {
        if ($this->currentSpeed >= 10)
        {
            $this->light = true;
            return $this->light;
        }
        else 
            $this->light = false;
            return $this->light;
    }

    public function switchOff():bool
    {
        $this->light = false;
        return $this->light;
    }
    
}
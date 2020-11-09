<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;

    /**
     * @var bool
     */
    private $light;

    
    

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function switchOn():bool
    {
        $this->light = true;
        return $this->light;
    }
    public function switchOff():bool
    {
        $this->light = false;
        return $this->light;

    }

    public function setParkBrake(bool $hasParkBrake)
    {
       $this->hasParkBrake = $hasParkBrake;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
   
    public function start() 
    {
        if ($this->hasParkBrake == true) 
        {
            throw new Exception("Warning! Park brake engaged!");
        } 
        return '<br> Engine is started ! ';
    }
    
}
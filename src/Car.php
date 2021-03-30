<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energyType;
    private int $fuelLevel = 25;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats);
        $this->energyType = $energyType;
    }

    public function getenergyType(): string
    {
        return $this->energyType;
    }

    public function setenergyType(string $energyType): void
    {
        $this->energyType = $energyType;
    }

    public function getfuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function setfuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;
    }

    public function start()
    {
        if($this->currentSpeed === 0){
            return "Vroom!";
        } else {
            return "La voiture roule déjà!";
        }
    }
}
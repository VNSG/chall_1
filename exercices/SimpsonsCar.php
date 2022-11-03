<?php
class SimpsonsCar extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file
    private string $energyType;
    private int $fuelLevel = 80;
    
// les methodes

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType = $energyType;
    }
    
    //les getters et les setters

        public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function setEnergyType($energyType): SimpsonsCar
    {
    if (in_array($energyType, self::ALLOWED_ENERGIES)) {
        $this->energyType = $energyType;
    }
    return $this;   
    }
    public function setFuelLevel($fuelLevel): int
    {
        return $this->fuelLevel = $fuelLevel;
    }


}
?>

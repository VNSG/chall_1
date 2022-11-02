<?php
class Simpsons_Car
{
    private int $nbWheels = 4;
    public int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energyType;
    private int $fuelLevel = 80;
    
// les methodes

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }
    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Let's start!";
    }
    public function forward (): string 
    {
        $this->currentSpeed = 19;
        return "GO!";
    }
    public function brake(): string
    {
        $sentence ="";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Homer Brake!!!";
        }
    $sentence .= "Ok Marge, I'm Stopped DOH!";
    return $sentence;
    }    

    //les getters et les setters

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getEnergyType(): string
    {
        return $this->energyType;
    }
    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }
    public function setCurrentSpeed($currentSpeed): int
    {
        return $this->currentSpeed = $currentSpeed;
    }
    public function setNbWheels($nbSeats): int
    {
        return $this->nbWheels = $nbSeats;
    }
    public function setColor($color): string
    {
        return $this->color = $color;
    }
    public function setNbSeats($nbSeats): int
    {
        return $this->nbSeats = $nbSeats;
    }
    public function setEnergyType($energyType): string
    {
        return $this->energyType = $energyType;
    }
    public function setFuelLevel($fuelLevel): int
    {
        return $this->fuelLevel = $fuelLevel;
    }

}
?>

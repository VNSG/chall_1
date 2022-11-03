<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
    {  
        public const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];
        private int $storageCapacity;
        private int $storage = 0;
        private string $energyType;
        private int $fuelLevel = 100;

       public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energyType)
       {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType = $energyType;
        $this->storageCapacity = $storageCapacity;
       } 
       public function getEnergyType() : string {
        return $this->energyType;
       }

       public function setEnergyType(string $energyType) : Truck {
        if(in_array($energyType, self::ALLOWED_ENERGIES)){
            $this->energyType = $energyType;
        }
        return $this;
    }
    public function getFuelLevel() : int {
        return $this->fuelLevel;
    }

    public function setFuelLevel(int $fuelLevel) : void {
        $this->fuelLevel = $fuelLevel;
    }

    public function getStorageCapacity() : int {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity) : void {
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorage() : int {
        return $this->storage;
    }

    public function setStorage(int $storage) : void {
        $this->storage = $storage;
    }
    public function filling(): string {
        $sentence = "";
        while ($this->storage < 0) {
            $this-> loading++;
            $sentence .= "there is still place!";
        }
        $sentence .= "that's enough";
        return $sentence;
    }

    }








?>
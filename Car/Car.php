<?php

class Car {
    private string $name;
    protected int $speed = 120;
    public string $color = "#fff";
    protected int $milage;
    protected int $distanceTravelled;
    protected int $fuelConsumed;
    protected int $fuelTank = 50;
    
    public function __construct(string $name, int $milage = 20)
    {
        $this->name = $name;
        $this->milage = $milage;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setDistanceTravelled(int $distanceTravelled): void
    {
        $this->distanceTravelled = $distanceTravelled;
    }
    
    public function setFuelConsumed(int $fuelConsumed): void
    {
        $this->fuelConsumed = $fuelConsumed;
    }

    public function calculateMilage(): void
    {
        $this->milage = intval($this->distanceTravelled / $this->fuelConsumed);
    }

    public function setMilage(int $distanceTravelled, int $fuelConsumed): void
    {
        $this->distanceTravelled = $distanceTravelled;
        $this->fuelConsumed = $fuelConsumed;

        $this->calculateMilage();
    }

    public function getMilage(): int
    {
        return $this->milage;
    }

    public function getFuelTank (): int
    {
        return $this-> fuelTank;
    }
}

<?php

class ExoticCar extends Car {
    protected int $speed = 150;
    protected int $fuelTank = 70;

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }
   

    // THis is how ClassA car milage is calculated.
    public function calculateMilage(): void
    {
        $this->milage = intval(($this->distanceTravelled / $this->fuelConsumed) * 0.9);
    }
}
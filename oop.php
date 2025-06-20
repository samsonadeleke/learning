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

class ClassACar extends Car {
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

$firstCar = new Car("Ferrari");
$firstCar->color = "#ff0000";
$firstCar->setMilage(400000, 2000);

$secondCar = new Car("Porche");
$secondCar->color = "#26e30d";
$secondCar->setDistanceTravelled(200000);
$secondCar->setFuelConsumed(1500);
$secondCar->calculateMilage();

$classACar = new ClassACar("Mercedes");
$classACar->setSpeed(250);
$classACar->setMilage(400000, 2000);

$cars = [$firstCar, $secondCar, $classACar];
?>

<html>
    <head>
        <title>My Cars</title>
    </head>
    <body>
        <table>
            <tr>
                <td>#</td>
                <td>Car</td>
                <td>Color</td>
                <td>Speed</td>
                <td>Milage</td>
                <td>Fuel Tank</td>
            </tr>
            <?php foreach($cars as $key => $car): ?>
            <tr>
                <td><?php echo $key + 1; ?>
                <td><?php echo $car->getName(); ?></td>
                <td>
                    <input type="color" id="favcolor" name="favcolor" value="<?php echo $car->color; ?>">
                </td>
                <td><?php echo $car->getSpeed(); ?> km/h</td>
                <td><?php echo $car->getMilage(); ?></td>
                <td><?php echo $car->getFuelTank(); ?> Litres</td>

            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
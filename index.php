<?php
require "Car/Car.php";
require "Car/ExoticCar.php";


$firstCar = new Car("Ferrari");
$firstCar->color = "#ff0000";
$firstCar->setMilage(400000, 2000);

$secondCar = new Car("Porche");
$secondCar->color = "#26e30d";
$secondCar->setDistanceTravelled(200000);
$secondCar->setFuelConsumed(1500);
$secondCar->calculateMilage();

$exoticCar = new ExoticCar("Mercedes");
$exoticCar->setSpeed(250);
$exoticCar->setMilage(400000, 2000);

$cars = [$firstCar, $secondCar, $exoticCar];
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
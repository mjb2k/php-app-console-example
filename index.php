<?php
  require('models/car.php');
  require('lib/car_factory.php');
  $car = CarFactory::getBlueCar();
?>
<!doctype html>
<html>
<head>
<title>Dummy PHP App</title>
</head>
<body>
<p>
  My car is <?= $car->getColor(); ?>. This is how my car drives, <?= $car->drive(); ?>.
</p>
</body>
</html>

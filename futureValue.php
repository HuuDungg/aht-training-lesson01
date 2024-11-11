<?php
$investment = $_POST["investment"];
$rate = $_POST["rate"];
$years = $_POST["years"];

$futureValue = $investment + ($investment * $rate / 100) * $years;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
Future value: <?php echo $futureValue ?>

<body>

</body>

</html>
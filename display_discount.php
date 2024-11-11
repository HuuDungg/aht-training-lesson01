<?php
$Amount = $_POST["amount"];
$Price = $_POST["price"];

$DiscountPrice = $Price - ($Price / 100 * $Amount);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Discount Amount: <?php echo $Amount ?>
    <br>
    Discount Price: <?php echo $DiscountPrice ?>
</body>

</html>
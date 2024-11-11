<?php
$yourNumber = $_POST["yourNumber"];
$textOfNumber = '';

if ($yourNumber < 10 && $yourNumber >= 0) {
    switch ($yourNumber) {
        case 0:
            $textOfNumber = "Zero";
            break;
        case 1:
            $textOfNumber = "One";
            break;
        case 2:
            $textOfNumber = "Two";
            break;
        case 3:
            $textOfNumber = "Three";
            break;
        case 4:
            $textOfNumber = "Four";
            break;
        case 5:
            $textOfNumber = "Five";
            break;
        case 6:
            $textOfNumber = "Six";
            break;
        case 7:
            $textOfNumber = "Seven";
            break;
        case 8:
            $textOfNumber = "Eight";
            break;
        case 9:
            $textOfNumber = "Nine";
            break;
    }
} else {
    $textOfNumber = "Out of the ability";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
Convert to text: <?php echo $textOfNumber ?>

<body>

</body>

</html>
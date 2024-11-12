<?php
$yourNumber = $_POST["yourNumber"];
function readNumber($number)
{
    if ($number < 0 || $number > 999) {
        return "out of ability";
    }

    $ones = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
    $teens = ["ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
    $tens = ["", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];

    $result = "";

    // Xử lý hàng trăm
    if ($number >= 100) {
        $hundreds = intval($number / 100);
        $result .= $ones[$hundreds] . " hundred";
        $number %= 100;
        if ($number > 0) {
            $result .= " and ";
        }
    }

    // Xử lý hàng chục và hàng đơn vị
    if ($number >= 20) {
        $tens_place = intval($number / 10);
        $result .= $tens[$tens_place];
        $number %= 10;
        if ($number > 0) {
            $result .= " " . $ones[$number];
        }
    } elseif ($number >= 10) {
        $result .= $teens[$number - 10];
    } elseif ($number > 0) {
        $result .= $ones[$number];
    }

    return $result;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
Convert to text => <?php echo readNumber($yourNumber); ?>

<body>

</body>

</html>
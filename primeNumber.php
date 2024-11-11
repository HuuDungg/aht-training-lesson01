<?php
$yourNumber = $_POST["yourNumber"];

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo 'NOT prime';
            break;
        }
    }
    echo 'Prime';
}


isPrime($yourNumber);

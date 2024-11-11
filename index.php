<?php
$yourNumber = 100;

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
        } else {
            echo $i . ' is prime';
        }
    }
}


isPrime($yourNumber);

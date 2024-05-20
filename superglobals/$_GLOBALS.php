<?php 

// new term : variable scope
// Create Function using globals variables
function add()
{
    $sum = $GLOBALS['number1'] + $GLOBALS['number2'];
    return $sum;
}

// $number1 = 100;
// $number2 = 50;

$GLOBALS['number1'] = 100;
$GLOBALS['number2'] = 50;

$result = add();
echo $result; // 150
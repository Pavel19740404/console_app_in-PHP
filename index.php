<?php

$result1 = 0;
while (true) {
    echo "Введите число: ";
    $numOne = trim(fgets(STDIN));
    if ($numOne != '0') {
        $numOneModify = intval($numOne);
        if(!$numOneModify) {
            fwrite(STDERR, "Введено не число, повторите попытку \n");
            continue;
        }
        $result1 = $numOneModify;
        break;
    } 
    $result1 = 0;
    break;
}  
echo "Введено число: $result1 \n";

$result2 = 0;
$demo = fopen('php://stdin', 'r');
while (true) {
    echo "Введите второе число: ";
    $numTwo = trim(fgets($demo));
    if($numTwo != '0') {
        $numTwoModity = intval($numTwo);
        if(!$numTwoModify) {
            fwrite(STDERR, "Введено не число, повторите попытку \n");
            continue;
        }
        $result2 = $numTwoModify;
        break;
    }
    fwrite(STDERR, "Делить на 0 нельзя, повторите попытку \n");
    continue;
}
echo "Введите число: $result2 \n";

fwrite(STDOUT, "Результат деления: " . ($result1/$result2) . PHP_EOL);
fclose($demo);

<?php

echo "Hello World!<br>";
//text (string, symbol)
$name = "Koala";
//integer
$number = 15;
//float
$number1 = 10.125;
//NULL
$val = NULL;

$number2 = $number;
$number3 = &$number;

$number = 10;

$sum = $number + $number1;
$sum2 = $number1 + $number2;
$sum3 = $number3 + $number1;
$sum4 = $name.' '.$number;

echo "First sum is: ".$sum." and second sum is: ".$sum2." and third sum is: ".$sum3.'<br>';
echo "Text + number $sum4 <br>";

echo "My name is $name";

function log_ip(){
    date_default_timezone_set('Europe/Tallinn');
    $file = fopen("log.txt", "a") or die("Can't open the file.");
    $time = time();
    $txt = $_SERVER['REMOTE_ADDR']." ".date("d-m-Y H:i:s")."\n";
    fwrite($file,$txt);
    fclose($file);
}
log_ip();
?>

<?php
$name = "John Smith"; //variable;
$address = "101 N. Main Street";
$city = "AnyTown";
$state = "TX";
$unitsTaken = "19"; //1

define('pricePerUnit', 100.50);//2
define('twentUnitHourDiscount', 150);//3

$newUnitsTakenVal = (integer)$unitsTaken;//4
$newUnitsTakenVal++;//5
$tuition = (pricePerUnit * $newUnitsTakenVal);//6
$afterDiscount = ($tuition - twentUnitHourDiscount);//7
$monthlyPayment = (double)($afterDiscount/12);//8

//9
echo("
    <div>Name: $name</div>
    <div>Address: $address</div>
    <div>City: $city</div>
    <div>State: $state</div>
    <div>Zip Code: 111111</div>
    <div>Number of units taken: $newUnitsTakenVal</div>
    <div>Tuition before discount: $".number_format($tuition, 2)." </div>
    <div>Tuition after discount: $".number_format($afterDiscount, 2)." </div>
    <div>Monthly Payment: $".number_format($monthlyPayment, 2)."</div>
")
?>
<?php


function sum($studentName,$phpname, $oopnum, $laravalnum, ){
    $result = $phpname + $oopnum + $laravalnum;
    echo "$studentName marks is $result";
    echo  "<br>";
}


sum('A', 500,50,50);
sum('B', 50,100,50);
sum('C', 50,200,50);
sum('D', 50,300,50);
sum('E', 50,400,50);
sum('F', 50,550,50);
sum('G', 50,600,50);
sum('H', 50,700,50);
sum('I', 50,800,50);
sum('J', 50,900,50);

echo "<br>";

function sum2($oopnum, $laravalnum, ){
    $result = $oopnum - $laravalnum;
    echo  "Minus marks is $result";
    echo  "<br>";
}


sum2(700,50);
sum2(700,500);

echo "<br>";

function sum3($oopnum, $laravalnum, ){
    $result = $oopnum / $laravalnum;
    echo  "Division marks is $result";
    echo  "<br>";
}


sum3(750,6);
sum3(420,5);

echo "<br>";

function sum4($oopnum, $laravalnum, ){
    $result = $oopnum % $laravalnum;
    echo  "Modulus marks is $result";
    echo  "<br>";
}


sum4(750,6);
sum4(420,5);

echo "<br>";

function sum5($oopnum, $laravalnum, ){
    $result = $oopnum * $laravalnum;
    echo  "Multiplication marks is $result";
    echo  "<br>";
}


sum5(750,6);
sum5(420,5);

echo "<br>";

function sum7($oopnum, $laravalnum, ){
    $result = $oopnum ** $laravalnum;
    echo  "Division marks is $result";
    echo  "<br>";
}


sum7(750,6);


<?php
/*
$name = ["100", "200", '300', '400'];

// array

echo "<pre>";
var_dump($name);
echo "</pre>";

// get element by index
echo "<pre>";
echo $name[2] ."<br>";
var_dump($name[2]);
echo "</pre>";

// set element by index
$name[1] = "500";

echo "<pre>";
var_dump($name);
echo "</pre>";

// append element in the array
$name[] = "guu";

echo "<pre>";
var_dump($name);
echo "</pre>";

// print the lenght of array
echo count($name);

// add element end of the array
array_push($name,'fuu');

echo "<pre>";
var_dump($name);
echo "</pre>";

// remove element end of the array
array_pop($name);

echo "<pre>";
var_dump($name);
echo "</pre>";

// add element at the begining of the array
array_unshift($name, "yoo");

echo "<pre>";
var_dump($name);
echo "</pre>";

// removed element at the begining of the array
array_shift($name);

echo "<pre>";
var_dump($name);
echo "</pre>";

// switch case
$num = 30 ;

switch ($num) {
    case "10":
        echo "a";
    break;

    case "20":
        echo "b";
    break;

    case "30":
        echo "c";
    break;

    case "40":
        echo "d";
    break;
}*/

// ----------------------LOOP----------------------

//--------------------while loop--------------------
$a = 0;
while ($a < 10) {
    echo $a+1 ;
    echo "<br>";
    $a++;
}

//--------------------for loops--------------------

for ($a = 0; $a < 10; $a++) {
    echo "The number is $a <br>";
}

// --------------------do while loop--------------------
$a = 0;
do {
    echo $a;
    $a++;
} while ($a <= 5);

// --------------------foreach-loop--------------------
$arr = array(10000,2000000,300000,400000,500000,600000);

foreach ($arr as $value) {
    echo $value."<br>";

}




?>
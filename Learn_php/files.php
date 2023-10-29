<?php
// json- javascript object notation
$jesonData = file_get_contents("https://restcountries.com/v3.1/all");


$countriesData = json_decode($jesonData , true);
echo "<pre>";
var_dump($countriesData);
echo "</pre>";

foreach ($countriesData as $user) {
    $name = $user["name"];
    $email = $user["email"];
    $phone = $user["phone"];
    $website = $user["website"];
}

?>
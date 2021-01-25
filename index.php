<?php

// Premiere ligne
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits)."<br>";
echo $fruits[1];

//Deuxieme ligne
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " . $age['Ben'] . " years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" . $x . ", Value=" . $y."<br>" ;
}



//Troisieme ligne
$colors = array("red", "green", "blue", "yellow");
asort($colors);
foreach($colors as $key => $val){
    echo $key = $val."<br>";
}
arsort($colors);
foreach($colors as $key => $val){
    echo $key = $val."<br>";
}

// Quatrieme ligne
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $key => $val){
    echo $key = $val."<br>";
}
<?php
//---array
$x[0] = "red";
$x[1] = "blue";

// echo $x[0];
// echo $x[1];

$y = array("cat", "dog");
// echo $y[0];
// echo $y[1];

$var1 = array(0=>"cat", 1=>"dog");
// echo $var1[0];
// echo $var1[1];

$var2 = array("color"=>"red", "value"=>43);
// echo $var2["color"];
// echo $var2["value"];


//---print_r
//print_r($var1);

//---var_dump
//var_dump($var1);

for($i=0; $i<4; $i++){
    //echo $var1[$i]."<br/>";
}

foreach($var1 as $key => $value){
    echo $key."=>".$value."<br/>";
}

?>
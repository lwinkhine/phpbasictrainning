<?php

$a = array(
     0 => array(
         0 => 'A',
         1 => 'B',
         2 => 'C',
         3 => 'D',
     ),
     1 => array(
         0 => 'E',
         1 => 'F',
         2 => 'G',
         3 => 'H',


     ),

     2 => array(
         0 => 'I',
         1 => 'J',
         2 => 'K',
         3 => 'L',


     ),

);

var_dump($a);
echo "<br /><br />";
foreach ($a as $key => $value){

foreach ($value as $key2 => $value2){
    echo $key ." ". $key2." ". $value2 . "<br>";


}
}

?>

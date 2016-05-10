
<?php
$array = array('A','B','C','D','E');
foreach ($array as $value) {
echo $value ."<br>";

}

echo "<br>";
$array[5]="研修";

foreach ($array as key => $value){
    echo $key ." ". $value . "<br>";
}
?>

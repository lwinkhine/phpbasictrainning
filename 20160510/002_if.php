<?php
$a = 15;
echo $a ."は <br /";
if( $a < 10 ){
  echo "10より小さい";
} elseif( $a < 20 ){
  echo $a ."は <br />";
  echo "10以上で 20より小さい";
} else {
    echo $a ."は <br />";
  echo "30以上";
}
?>

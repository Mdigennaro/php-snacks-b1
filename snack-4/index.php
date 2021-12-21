<!--
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->
<?php


function getRandomNumber($min, $max, $nItems){

  $numbers = [];

  if (($max - $min) < $nItems) {
    $nItems = $max - $min;
  }

  while (count($numbers) < $nItems ) {
    $number = rand($min, $max);

    if(!in_array($number, $numbers)){
      $numbers[] = $number;
    }
  }

  return $numbers;
  
}

var_dump(getRandomNumber(35, 50, 15)) 

?>

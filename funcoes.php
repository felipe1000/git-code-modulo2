<?php



// $array = [1, 2, 3, 4, 5, 6, 8, 90];

// array_walk($array,function ($x){
   
//    echo $x."<br>";
// });


function soma($x,$y){
    echo "Imprimiu!!!<br>";
   return $x+$y;
   echo "Não Mostra Imprimiu!!!";

}

$valor= soma(10, 20);

echo $valor;
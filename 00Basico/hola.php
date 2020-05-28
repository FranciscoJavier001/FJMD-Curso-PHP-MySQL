<?php
//comentario de una sola linea
/*
esto es un comentario multilinea

*/

//imprimir en patalla
echo ("Hola Mundo -.-<br/>");  
echo ("Hola hermoso mundo<br /> estoy <h1>aprendiendo
 PHP</h1>");


//variables
$nombre = "Gustavo";
$Nombre = "America";
//concatenacion de variables y espacion en blanco
echo $nombre."&nbsp;".$Nombre;
echo "<br />";

$num1=5;
$num2=77;

$suma = $num1 + $num2;
echo $suma;
echo "<br/>";

echo"la variable \$suma tiene el valor de $suma <br />";

$modulo = $num2 % 2;
if($modulo==0){
	echo "El n&uacute;mero es Par";
}else{
	echo "El n&uacute;mero es Impar";
}
 echo "<br />";
 for($i=0;$i<=10;$i++){
	 echo $i."<br/>";	 
 } 
?>

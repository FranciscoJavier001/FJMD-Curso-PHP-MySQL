<?php

session_start();
//Evaluo que la sesion continue verificando una de las variables creadas en cotrnol.php cuando ya no coincida
//con su valor inical se redirije al archivo de salir.php
if(!$_SESSION["autentificado"]){
	header("Location: salir.php");
}
?>
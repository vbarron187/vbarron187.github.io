<?php 

function conectar(){

	$user="root"; 
	$pass=""; 
	$server="localhost";
	$db="paginamejorada.html"
    $con=mysql_connect($server,$user,$pas) or die ("Error al conectara labse de datos".mysql_error()); 
    mysql_select_db($db,$con);

    return $con;  

}

?>
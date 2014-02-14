<?php 
	include("helper.php");

	cabecera_html("Probando JSON con PHP");
	
	echo "Este es un dato JSON pasado a PHP.</br>";
	$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
	$decodificacion = json_decode($json);
	$vardump = var_dump($decodificacion, TRUE); //var_dump es para mostrar información estructurada sobre expresiones con tipo-valor
	
	echo "JSon=".$json;
	echo "Este es el archivo decodif".$decodificacion;
	//echo "$vardump";
	

?>

<?php 
	
	echo "</div></body></html>";

?>
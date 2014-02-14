<?php

		
function cabecera_html($titulo_pagina){
	
?>

	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title><?=$titulo_pagina?></title>
	<h2>Prácticas de Pablo Sánchez</h2>
	<h3><?=$titulo_pagina?></h3>
    </head>
    <body> 
	<div>
<?php

}
function pie_html(){
		
		
	echo "<table><tr>";
	echo "</tr></table>\n";
	echo "</div> \n";
	
	for($i=1; $i<=20; $i++){
		echo "<td><a href=\"$i.php\"> $i </a></td>";
	}
	
    echo "</body>\n";
    echo "</html>";
}
?>
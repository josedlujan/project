<?php

require_once('functions.php');

$fun = new functions();
$res = $fun->show("SELECT id, nombre, apellidos, direccion FROM clientes");
/*while($res) {
	echo "<pre>";
	print_r($res);
	echo "</pre>";
	break;
}*/

$dataXML = '<?xml version="1.0" encoding="UTF-8"?>';
$dataXML.= '<transitnet>
<data>';
foreach($res as $element) {	// CICLO PARA OBTENER LAS FILAS DE LA SENTENCIA SQL DEL PROYECTO.
	//extract($res);	// EXTRACTOR DE VALORES DE LA SENTENCIA SQL DEL PROYECTO.			
	$dataXML.='<img>
		<id>'.$elemet.'</id>
		<nombre>'.$element.'</nombre>
		<apellidos>'.$element.'</apellidos>
		<direccion>'.$element.'</direccion>
	</img>';
	//break;
}
//mysql_free_result($query);	// LIBERACIÓN DE MEMORIA DEL SERVIDOR
$dataXML.= '</data>
</transitnet>';
file_put_contents('transitnet.xml', $dataXML);


function gallery() {
	$gal = simplexml_load_file("http://lloyd-team.com/mexicorelax.com/gallery.xml");
	foreach($gal->gallery->img as $data) {
		echo $data->url;
	}
}
?>
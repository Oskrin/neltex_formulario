<?php
crear();

function crear() {
	$xml = new DomDocument('2.0', 'UTF-8');

	$formulario = $xml->createElement('formulario');
	$formulario = $xml->appendChild($formulario);

	$xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('libros.xml');

	echo htmlentities($el_xml);



}

?>
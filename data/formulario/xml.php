<?php
	$xml = new DomDocument('1.0', 'UTF-8');


	$formulario = $xml->createElement('formulario');
    $formulario = $xml->appendChild($formulario);
 
    $cabecera = $xml->createElement('cabecera');
    $cabecera = $formulario->appendChild($cabecera);
 
    $codigo_version_formulario = $xml->createElement('codigo_version_formulario','01201501');
    $codigo_version_formulario = $cabecera->appendChild($codigo_version_formulario);

    $ruc = $xml->createElement('ruc','1004358584001');
    $ruc = $cabecera->appendChild($ruc);

    $codigo_moneda = $xml->createElement('codigo_moneda','1');
    $codigo_moneda = $cabecera->appendChild($codigo_moneda);

    $detalle = $xml->createElement('detalle');
    $detalle = $formulario->appendChild($detalle);

    $campo = $xml->createElement('campo','');
    $campo->setAttribute('numero', '99');
    $campo = $detalle->appendChild($campo);

    $campo = $xml->createElement('campo','0');
    $campo->setAttribute('numero', '31');
    $campo = $detalle->appendChild($campo);

    $campo = $xml->createElement('campo','');
    $campo->setAttribute('numero', '104');
    $campo = $detalle->appendChild($campo);

    $campo = $xml->createElement('campo','');
    $campo->setAttribute('numero', '203');
    $campo = $detalle->appendChild($campo);

    $campo = $xml->createElement('campo','1004358584001');
    $campo->setAttribute('numero', '201');
    $campo = $detalle->appendChild($campo);

    $campo = $xml->createElement('campo','OSCAR TROYA');
    $campo->setAttribute('numero', '202');
    $campo = $detalle->appendChild($campo);

	$xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('libros.xml');

?>
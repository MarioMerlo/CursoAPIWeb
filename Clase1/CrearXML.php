<?php


/*
 * Crear XML desde PHP
 * */

$xml = new SimpleXMLElement("libreria.xml", null, true);

$libro = $xml->addChild("libro");
$libro->addAttribute('isbn', '1234567890');
$libro->addChild("titulo", "Harry Potter");
$libro->addChild("autor", "JR Tolkien");
$libro->addChild("editorial", "Paidós");

$fp = fopen('data/libros.xml', 'w+');
fwrite($fp, $xml->asXML());
fclose($fp);



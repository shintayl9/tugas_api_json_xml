<?php 
header('Content-Type: application/xml');

$xml = new SimpleXMLElement('<persons/>');
$person = $xml->addChild('person');
$person->addChild('id', 1);
$person->addChild('Judul', 'Bumi manusia');
$person->addChild('Penulis', "Pramoedya Ananta Toer");
echo $xml->asXML();
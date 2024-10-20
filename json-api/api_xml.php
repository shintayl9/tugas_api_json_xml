<?php
header('Content-Type: application/xml');

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($data) {
    $id = $data['id'];
    $judul = $data['Judul'];
    $penulis = ['Penulis'];
}

$xml = new SimpleXMLElement('<persons/>');
$person = $xml->addChild('person');
$person->addChild('id', 1);
$person->addChild('Judul', 'Bumi manusia');
$person->addChild('Penulis', "Pramoedya Ananta Toer");

echo $xml->asXML();
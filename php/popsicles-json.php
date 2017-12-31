<?php

// creates JSON snippet from a PHP array.
// good for initially seeding the firebase database.


$a = array (
'popsicles' => array (
'red' => array ('1' => 'a', '2' => 'b', '3'=> 'c','4'=>'d'),
'blue' => array ('1' => 'e', '2' => 'f', '3'=> 'g','4'=>'h'),
'green' => array ('1' => 'i', '2' => 'j', '3'=> 'k','4'=>'l'),
) );

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header('Content-disposition: attachment; filename="firebase-import.json"');

echo json_encode ( $a ) ;

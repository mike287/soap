<?php

require_once "./client.php";

$id_array = array('id' => '1');
echo "partycja w MB: ".$client->getComputerSpace($id_array)."<br>";
echo "adres IP to: ".$client->getIP($id_array)."<br>";
echo "system operacyjny: ".$client->getSystem($id_array)."<br>";
echo "Informacje : ".$client->getInfo($id_array);
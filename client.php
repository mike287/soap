<?php

class client
{
    public function __construct()
    {
        $params = array('location' => 'http://localhost/NoweRozdanie/php/zadania/soap/przyklad/server.php',
                        'uri' => 'urn://localhost/NoweRozdanie/php/zadania/soap/przyklad/server.php');
        $this->instance = new SoapClient(NULL, $params);
    }

    public function getComputerSpace($id_array)
    {
        return $this->instance->__soapCall("getComputerSpace", $id_array);
    }

    public function getIP($id_array)
    {
        return $this->instance->__soapCall("getComputerIP", $id_array);
    }

    public function getSystem($id_array)
    {
        return $this->instance->__soapCall("getSystem", $id_array);
    }

    public function getInfo($id_array)
    {
        return $this->instance->__soapCall("getInfo", $id_array);
    }
}

$client = new client();
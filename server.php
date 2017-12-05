<?php

class server
{
//    private $db;

    public function __construct()
    {
//        $this->db = mysqli_connect('localhost:3306', "root", "root", "test");
    }

//    function computerData($computerData) {
//        $this->db->query();
//    $file_db = null;
//        $this->operate();
//        return $computerData;
//    }


    public function getComputerSpace($id_array)
    {   $df = disk_free_space("/");
        return $df/1024;
    }

    public function getComputerIP($id_array)
    {
        return $_SERVER['SERVER_ADDR'];
    }

    public function getSystem($id_array)
    {
        $a= strtolower($_SERVER['HTTP_USER_AGENT']);

        if(strpos($a, 'windows') !== false) {
            $result = 'Windows';
        } elseif(strpos($a, 'linux') !== false) {
            $result = 'Linux';
        } elseif(strpos($a, 'mac os') !== false) {
            $result = 'MacOS';
        } elseif(strpos($a, 'ubuntu') !== false) {
            $result = 'Ubuntu';}
        else {
            $result = 'Inny';
        }

        return $result;
    }

    public function getInfo($id_array)
    {
        $info= strtolower($_SERVER['HTTP_USER_AGENT']);
        return $info;
    }

}
$params = array('uri' => 'http://localhost/NoweRozdanie/php/zadania/soap/przyklad/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

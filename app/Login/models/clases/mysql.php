<?php

class mysql
{
    private $host;
    private $user;
    private $pass;
    private $db;

    public function __construct()
    {
        $this->host = 'appwhatsapp.crzqomk2sbtp.us-east-2.rds.amazonaws.com';
        $this->user = 'root';
        $this->pass = 'Clau32290398';
        $this->db = 'Whatsapp'; 
/*         $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'whatsapp'; */
    }

    public function Conexion()
    {
        $mysql = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if ($mysqli = mysqli_connect_errno()) {
            echo 'Error de conexion';
        } else {
            return $mysql;
        }
    }

    public function __destruct()
    {
        mysqli_close($this->Conexion());
    }
}

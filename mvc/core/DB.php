<?php
class DB
{
    public $con;
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "projectdb";

    public function __construct()
    {
        $this->con = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
        mysqli_query($this->con, "SET NAMES = 'utf-8'");
    }
}
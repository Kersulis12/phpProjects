<?php
class DB{
    public $conn;

    public function __construct() {//private gali pasiekti tik klases viduje
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "myweb_29";
        $this->conn = new mysqli($host, $user, $pass, $db);
    }
}

?>
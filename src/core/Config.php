<?php 
class Database {
    public $connect;
    protected $host = "remotemysql.com";
    protected $username = "2wzOY6m2tD";
    protected $password = "NF02vUmHDR";
    protected $database = "2wzOY6m2tD";

    function __construct() {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password);

        if (!$this->connect) {
            die("Could not connect: " . mysqli_error($this->connect));
        }

        mysqli_select_db($this->connect, $this->database);
        mysqli_query($this->connect, "SET NAMES 'utf8'");
    }
}
?>
<?php 
class Database {
    public $connect;
    // protected $host = "localhost";
    // protected $username = "root";
    // protected $password = "";
    // protected $database = "BK_Cleanly";
    protected $host = "remotemysql.com";
    protected $username = "xlrjPPuZmo";
    protected $password = "jgIpYJcTiK";
    protected $database = "xlrjPPuZmo";

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
<?php

class DataAccess {

    private $host="db";
    private $user="root";
    private $pass="example";
    private $dbname="testdb";

    function connect(){

        $conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dbname
        );

        if($conn->connect_error){
            die("Connection failed");
        }

        return $conn;
    }

    function getStudents(){

        $conn = $this->connect();

        $sql = "SELECT * FROM student";

        $result = $conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
?>
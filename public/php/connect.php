<?php

    class Dtbshst {
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbName = "product_list";

        protected function connect() {
            $conn = new mysqli($this->host, $this->user, $this->pwd, $this->dbName);
            return $conn;

//            $dsn = 'mysql:host=' . $this->host . ';dbname =' . $this->dbName;
//            $pdo = new PDO($dsn, $this->user, $this->pwd);
//            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//            return $pdo;
        }
    }



//    $mysql = new mysqli('localhost', 'root', '', 'product_list');
//
//    if ($mysql->connect_errno) {
//        echo $mysql->connect_errno;
//    }
?>
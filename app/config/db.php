<?php
        class Connection{
                private $host;
                private $user;
                private $pass;
                private $db;
                function __construct($host = "localhost", $user = "root", $pass = "", $db = "ThingToDo"){
                        $this->host = $host;
                        $this->user = $user;
                        $this->pass = $pass;
                        $this->db = $db;
                        $connection = new mysqli($host, $user, $pass, $db);
                        if ($connection->connect_error) {
                               echo "Error de conexion " . $connection->connect_error . " codigo de error " . $connection->connect_errno;
                        }else{
                                return $connection;
                        }
                }
        }
?>

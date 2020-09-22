<?php
        require('../config/db.php');
        class User_model{
                private $connection;
                function __construct(){
                        $this->connection = new Connection();
                }
                public function add($name, $pass){
                        $query = "INSERT INTO users (name, password) VALUES ('$name', '$pass')";
                        $add = $this->connection->query($query);
                        return $add;
                }
                public function get_all($id){
                        $query = "SELECT * FROM users WHERE id='$id'";
                        $get_all = $this->connection->query($query);
                        return $get_all;
                }
                public function update_name($id, $name){
                        $query = "UPDATE users SET name = '$name' WHERE id = '$id'";
                        $update_name = $this->connection->query($query);
                        return $update_name;
                }
                public function update_password($id, $password){
                        $query = "UPDATE users SET password = '$password' WHERE id = '$id'";
                        $update_password = $this->connection->query($query);
                        return $update_password;
                }
        }
?>

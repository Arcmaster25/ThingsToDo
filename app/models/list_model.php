<?php
        require('../config/db.php');
        class list_model{
                private $connection;
                function __construct(){
                        $this->connection = new Connection();
                }
                public function add($user_id, $name){
                        $query = "INSERT INTO list (listName, user_id) VALUES ('$name', '$user_id')";
                        $add = $this->connection->query($query);
                        return $add;
                }
                public function get_all($id){
                        $query = "SELECT * FROM list WHERE id = '$id'";
                        $get_all = $this->connection->query($query);
                        return $get_all;
                }
                public function update($id, $name){
                        $query = "UPDATE list SET listname = '$name'";
                        $update = $this->connection->query($query);
                        return $update;
                }
                public function delete($id){
                        $query = "DELETE FROM list WHERE id = '$id'";
                        $delete = $this->connection->query($query);
                        return $delete;
                }
        }
?>

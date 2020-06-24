<?php
        require('app/config/db.php');
        class List_model{
                private $connection;
                function __construct(){
                        $this->connection = new Connection();
                }
                public function add($user_id, $name){
                        $query = "INSERT INTO list (list_Name, user_id) VALUES ('$name', '$user_id')";
                        $add = $this->connection->query($query);
                        return $this->connection->affected_rows;
                }
                public function get_all($id){
                        $query = "SELECT * FROM list WHERE id = '$id'";
                        $get_all = $this->connection->query($query);
                        return $this->connection->fetch_all(MYSQLI_ASSOC);
                }
                public function update($id, $name){
                        $query = "UPDATE list SET list_name = '$name'";
                        $update = $this->connection->query($query);
                        return $this->connection->affected_rows;
                }
                public function delete($id){
                        $query = "DELETE FROM list WHERE id = '$id'";
                        $delete = $this->connection->query($query);
                         return $this->connection->affected_rows;
                }
                public function get_all_task($list_id){
                        $query = "SELECT homework.id, homework.homework_name, homework.list_id FROM list RIGHT JOIN homework ON list.id = homework.id";
                        $get_all_task = $this->connection->query($query);
                        return $this->connection->fetch_all(MYSQL_ASSOC);
                }
        }
?>

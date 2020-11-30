<?php
        require('app/config/db.php');
        class List_model{
                private $connection;
                function __construct(){
                        $this->connection = connection();
                }
                public function add($user_id, $name){
                        $query = "INSERT INTO list (list_name, user_id) VALUES ('$name', '$user_id')";
                        $add = $this->connection->query($query);
                        return $this->connection->affected_rows;
                }
                public function get_all_by_user_id($user_id){
                        $query = "SELECT * FROM list WHERE user_id = '$user_id'";
                        $get_all = $this->connection->query($query);
                        return $get_all->fetch_all(MYSQLI_ASSOC);
                }
                public function update($id, $name){
                        $query = "UPDATE list SET list_name = '$name' WHERE id = '$id'";
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
                        return $get_all_task->fetch_all(MYSQL_ASSOC);
                }
        }
?>

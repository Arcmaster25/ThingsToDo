<?php
class Homework_controller{
        public function add(){
                require('app/models/homework_model.php');
                session_start();
                $message = '';
                $user_id = '';
                if(isset($_POST['hw_name']) && isset($_POST['hw_id'])){
                        $homework_name = $_POST['hw_name'];
                        $homework_id = $_POST['hw_id'];
                        $user_id = $_SESSION['user_id'];
                        $homework_model = new Homework_model();
                        $add_task = $homework_model->add($homework_name, $homework_id);
                        if(is_countable($add_task) > 0){
                                $message = 'Tarea creada de forma satisfactoria';
                        }
                }
                require('app/views/list.php');
        }
        public function update(){
                require('app/models/homework_model.php');
                session_start();
                $message = '';
                $user_id = '';
                if(isset($_POST['new_name']) && isset($_POST['homework_id'])){
                        $new_name = $_POST['new_name'];
                        $homework_id = $_POST['homework_id'];
                        $user_id = $_SESSION['user_id'];
                        $homework_model = new Homework_model();
                        $update = $homework_model->update($homework_id, $new_name);
                        if(is_countable($update) > 0){
                                $message = 'tarea actualizada de forma correcta';
                        }
                }
                require('app/views/list.php');
        }
        public function delete(){
                require('app/models/homework_model.php');
                session_start();
                $message = '';
                $user_id = '';
                if(isset($_POST['homework_id'])){
                        $homework_id = $_POST['homework_id'];
                        $user_id = $_SESSION['user_id'];
                        $homework_model = new Homework_model();
                        $delete = $homework_model->delete($homework_id, $new_name);
                        if(is_countable($delete) > 0){
                                $message = 'Tarea eliminada de forma satisfactoria';
                        }
                }
                require('app/views/list.php');
        }
}
if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        $list_class = new Howemork_controller();
        $list_class->$action();
}
?>

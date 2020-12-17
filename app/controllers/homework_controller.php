<?php
class Homework_controller{
        public function add(){
                require('app/models/homework_model.php');
                if(isset($_POST['hw_name']) && isset($_POST['hw_id'])){
                        $homework_name = $_POST['hw_name'];
                        $homework_id = $_POST['hw_id'];
                        $homework_model = new Homework_model();
                        $add_task = $homework_model->add($homework_name, $homework_id);
                        if(is_countable($add_task) > 0){
                                echo json_encode($add_task, JSON_FORCE_OBJECT);
                        }
                }
                //require('app/views/list.php');
        }
        public function update(){
                require('app/models/homework_model.php');
                $message = '';
                if(isset($_POST['new_name']) && isset($_POST['homework_id'])){
                        $new_name = $_POST['new_name'];
                        $homework_id = $_POST['homework_id'];
                        $homework_model = new Homework_model();
                        $update = $homework_model->update($homework_id, $new_name);
                        if(is_countable($update) > 0){
                                $message = 'tarea actualizada';
                                echo json_encode($message);
                        }
                }
                //require('app/views/list.php');
        }
        public function delete(){
                require('app/models/homework_model.php');
                if(isset($_POST['homework_id'])){
                        $homework_id = $_POST['homework_id'];
                        $homework_model = new Homework_model();
                        $delete = $homework_model->delete($homework_id, $new_name);
                        if(is_countable($delete) > 0){
                                echo json_encode($delete, JSON_FORCE_OBJECT);
                        }
                }
        }
}
if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        $list_class = new Homework_controller();
        $list_class->$action();
}
?>

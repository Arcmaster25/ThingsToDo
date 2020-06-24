<?php
        class List_controller{
                public function add(){
                        require('app/models/list_model.php');
                        session_start();
                        $message = '';
                        $user_id = '';
                        if(isset($_POST['ls_name'])){
                                $list_name = $_POST['ls_name'];
                                $user_id = $_SESSION['user_id'];
                                $list_model = new List_model();
                                $add_list = $list_model->add($user_id, $list_name);
                                if($add_list == 1){
                                        $message = 'Lista creada de forma satisfactoria';
                                }
                        }
                        require('app/views/list.php');
                } 
                public function index(){
                        require('app/models/list_model.php');
                        session_start();
                        $message = '';
                        $all_list = '';
                        $user_id = '';
                        if(isset($_SESSION['user_id'])){
                                $list_model = new List_model();
                                $user_id = $_SESSION['user_id'];
                                $message = 'Usuario activo';
                                $get_all = $list_model->get_all($user_id);
                                if(is_countable($get_all) > 0){
                                        $all_list = $get_all;
                                }
                        }
                        require('app/views/list.php');
                }
                public function update(){
                        require('app/models/list_model.php');
                        session_start();
                        $message = '';
                        $user_id = '';
                        if(isset($_POST['up_list'])){
                                $user_id = $_SESSION['user_id'];
                                $new_name = $_POST['up_list'];
                                $list_model = new List_model();
                                $update = $list_model->update($user_id, $new_name);
                                if($update == 1){
                                        $message = 'Lista actualizada de forma satisfactoria';
                                }
                        }
                        require('app/views/list.php');
                }
                public function delete(){
                        require('app/models/list_model.php');
                        session_start();
                        $message = '';
                        $user_id = '';
                        if(isset($_GET['list_id'])){
                                $user_id = $_SESSION['user_id'];
                                $new_name = $_POST['list_id'];
                                $list_id = new List_model();
                                $delete = $list_model->delete($list_id);
                                if($delete == 1){
                                        $message = 'Lista eliminada de forma satisfactoria';
                                }
                        }
                        require('app/views/list.php');
                }
                public function content(){
                        require('app/models/list_model.php');
                        session_start();
                        $user_id = '';
                        $all_task = '';
                        if(isset($_GET['list_id']) && $_GET['list_id'] != ''){
                                $list_id = $_GET['list_id'];
                                $user_id = $_SESSION['user_id'];
                                $list_model = new List_model();
                                $content_list = $list_model->get_all_task($list_id);
                                if(is_countable($content_list) > 0){
                                        $all_task = $content_list;
                                }
                        }
                        require('app/views/list.php');
                }
        }
?>

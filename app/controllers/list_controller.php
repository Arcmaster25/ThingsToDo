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
                                if($add_list == null){
                                        echo 'Retorno nulo';
                                }
                                if($add_list == 1){
                                        header('Location: index.php?controller=list&action=index');
                                }
                        }
                        require('app/views/list.php');
                } 
                public function index(){
                        require('app/models/list_model.php');
                        session_start();
                        $message = '';
                        $all_list = '';
                        $all_task = '';
                        $user_id = '';
                        if(isset($_SESSION['user_id'])){
                                $list_model = new List_model();
                                $user_id = $_SESSION['user_id'];
                                $get_all = $list_model->get_all_by_user_id($user_id);
                                if(count($get_all) > 0){
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
                        $list_id = '';
                        if(isset($_POST['up_list']) && isset($_POST['list_id'])){
                                $user_id = $_SESSION['user_id'];
                                $new_name = $_POST['up_list'];
                                $list_id = $_POST['list_id'];
                                $list_model = new List_model();
                                $update = $list_model->update($list_id, $new_name);
                                if($update == 1){
                                        $message = 'Lista actualizada de forma satisfactoria';
                                        header('Location: index.php?controller=list&action=index');
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
                                $list_id = $_GET['list_id'];
                                $list_model = new List_model();
                                $delete = $list_model->delete($list_id);
                                if($delete == 1){
                                        $message = 'Lista eliminada de forma satisfactoria';
                                        header('Location: index.php?controller=list&action=index');
                                }
                        }
                        require('app/views/list.php');
                }
                public function content(){
                        require('app/models/list_model.php');
                        session_start();
                        $user_id = $_SESSION['user_id'];
                        $all_task = '';
                        if(isset($_GET['list_id']) && $_GET['list_id'] != ''){
                                $list_id = $_GET['list_id'];
                                $list_model = new List_model();
                                $content_list = $list_model->get_all_task($list_id);
                                if(is_countable($content_list) > 0){
                                        $all_task = $content_list;
                                }
                        }
                        require('app/views/list.php');
                }
        }
        if(isset($_GET['action']) && !empty($_GET['action'])){
                $action = $_GET['action'];
                $list_class = new List_controller();
                $list_class->$action();
        }else{
                $list_class = new List_controller();
                $list_class->index();
        }
?>

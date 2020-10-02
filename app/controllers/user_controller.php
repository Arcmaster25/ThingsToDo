<?php
        class User_controller{
                public function registry(){
                        require('app/models/user_model.php');
                        $message = '';
                        if(isset($_POST['usr']) && isset($_POST['pss'])){
                                $user = $_POST['usr'];
                                $password = $_POST['pss'];
                                $password_hashed = password_hash($password, PASSWORD_BCRYPT);
                                $user_model = new User_model();
                                $user_exist = $user_model->get_by_name($user);
                                if($user_exist['name'] != $user){
                                        $create_user = $user_model->add($user, $password_hashed);
                                        if($create_user != -1){
                                                $message = 'El usuario fue creado de forma satisfactoria';
                                                header('Location: index.php?controller=user&action=login');
                                        }else{
                                                $message = 'Lo sentimos, hubo un error al crear su usuario';
                                        }
                                }else{
                                        $message = 'Este usuario ya esta registrado en el sitio';
                                }
                        }
                        require('app/views/registry.php');
                }
                public function login(){
                        require('app/models/user_model.php');
                        session_start();
                        $message = '';
                        if(isset($_POST['usr']) && isset($_POST['pss'])){
                                $user = $_POST['usr'];
                                $password = $_POST['pss'];
                                $user_model = new User_model();
                                $get_user = $user_model->get_by_name($user);
                                if($get_user['name'] == NULL){
                                        $message = 'Este nombre de usuario no existe';
                                }else{
                                        $password_db = $get_user['password'];
                                        $password_validate = password_verify($password, $password_db);
                                        if($get_user['name'] == $user && $password_validate == TRUE){
                                                $_SESSION['user_name'] = $get_user['name'];
                                                $_SESSION['user_id'] = $get_user['id'];
                                                header('Location: index.php');
                                        }else{
                                                $message = 'Verifique que la contrasena o nombre de usuario sean correctos';
                                        }
                                }
                        }
                        require('app/views/login.php');
                }
                public function profile(){
                        require('app/models/user_model.php');
                        session_start();
                        $user_name = '';
                        $message = '';
                        $user_id = '';
                        if(isset($_SESSION['user_id'])){
                                $user_id = $_SESSION['user_id'];
                                $user_model = new User_model();
                                $user_data = $user_model->get_all($user_id);
                                if(count($user_data) > 0){
                                        $user_name = $user_data;
                                }
                        }
                        require('app/views/profile.php');
                }
                public function update_name(){
                        require('app/models/user_model.php');
                        session_start();
                        $message = '';
                        $user_id = '';
                        if(isset($_POST['usr'])){
                                $new_user = $_POST['usr'];
                                $user_id = $_SESSION['user_id'];
                                $user_model = new User_model();
                                $user_update = $user_model->update_name($user_id, $new_user);
                                if($user_update == TRUE){
                                        $message = 'Usuario actualizado de forma satisfactoria';
                                }
                        }
                        require('app/views/profile.php');
                }
                public function update_password(){
                        require('app/models/user_model.php');
                        session_start();
                        $message = '';
                        $user_id = '';
                        if(isset($_POST['pss']) && isset($_POST['pss_new']) && isset($_POST['pss_conf'])){
                                $actual_pass = $_POST['pss'];
                                $new_pass = $_POST['pss_new'];
                                $conf_pass = $_POST['pss_conf'];
                                $user_id = $_SESSION['user_id'];
                                $user_model = new User_model();
                                if($new_pass != $conf_pass){
                                        $message = 'La contrasena de confirmacion y la nueva no son la misma';
                                }else{
                                        $user_data = $user_model->get_all($user_id);
                                        if(count($user_data) > 0){
                                                if(password_verify($actual_pass, $user_data['password'])) {
                                                        $new_pass_hash = password_hash($new_pass, PASSWORD_BCRYPT);
                                                        $update_password = $user_model->update_password($user_id, $new_pass_hash);
                                                        if($update_password == TRUE){
                                                                $message = 'Contrasena actualizada de forma satisfactoria';
                                                        }else{
                                                                $message = 'Lo sentimos, hubo un error al actualizar su contrasena';
                                                        }
                                                }
                                        }
                                }
                        }
                        require('app/views/profile.php');
                }
                public function logout(){
                        session_start();
                        session_unset();
                        session_destroy();
                        header('Location: index.php');
                }
        }
        if(isset($_GET['action']) && !empty($_GET['action'])){
                $action = $_GET['action'];
                $list_class = new User_controller();
                $list_class->$action();
        }
?>

<!DOCTYPE>
<html>
<head LANG='en'>
        <meta charset='UFT-8'>
        <link rel='stylesheet' href='public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body>
        <?php require_once('app/utils/header.php'); ?>
        <div class='container'>
                <div class='row'>
                        <div class='col-12'>
                                <?php if($user_id == ''){?>
                                        <div class='alert alert-danger text-center mt-2' role='alert'>
                                                Debes iniciar sesion para ver tus datos
                                        </div>
                                <?php }else{ ?>
                                        <?php if($message == ''){}else{ ?>
                                                <?php if($message != 'Usuario actualizado de forma satisfactoria' || $message != 'Contrasena actualizada de forma satisfactoria'){ ?>
                                                        <div class='alert alert-danger text-center' role='alert'>
                                                                <?php echo $message ?>
                                                        </div>
                                                <?php }else{ ?>
                                                        <div class='alert alert-success text-center' role='alert'>
                                                                <?php echo $message ?>
                                                        </div>
                                                <?php } ?>
                                        <?php } ?>
                                <?php } ?>
                                <h1 class='text-center mt-3'>Profile</h1>
                                <main class='card text-center'>
                                        <div class='card-body mt-3'>
                                                <form method='POST'>
                                                        <div class='form-group'>
                                                                <label for='user'>User</label>
                                                                <input type='text' disabled class='text-center form-control' name='user' value="<?php if($user_id == ''){

                                                                }else{
                                                                        echo $name = $user_name["name"] != '' ? $user_name["name"] : '';
                                                                } ?>">
                                                        </div>
                                                        <div id='user_form'>
                                                                <div class='form-group'>
                                                                        <label for='usr'>New User</label>
                                                                        <input type='text' class='text-center form-control' name='usr' required>
                                                                </div>
                                                                <div class='form-group'>
                                                                        <button type='submit' class='btn btn-success' formaction='index.php?controller=user&action=update_name'>Confirm Change</button>
                                                                </div>
                                                        </div>
                                                </form>
                                                <form method="POST">
                                                        <div class='form-group'>
                                                                <label for='pss'><span id='update'>Actual</span> Password</label>
                                                                <input type='password' disabled class='text-center form-control' name='pss' required>
                                                        </div>
                                                        <div id='password_form'>
                                                                <div class='form-group'>
                                                                        <label for='pss_new'>New Password</label>
                                                                        <input type='password' class='text-center form-control' name='pss_new' required>
                                                                </div>
                                                                <div class='form-group'>
                                                                        <label for='pss_conf'>Confirm Password</label>
                                                                        <input type='password' class=' text-center form-control' name='pss_conf' required>
                                                                </div>
                                                                <div class='form-group'>
                                                                        <button type='submit' class='btn btn-success' formaction='index.php?controller=user&action=update_password'>Confirm Change</button>
                                                                </div>
                                                        </div>
                                                </form>
                                                <div>
                                                        <?php if($user_id != ''){ ?>
                                                                <button type='button' class='btn btn-primary' id='ch_user'>Change User</button>
                                                                <button type='button' class='btn btn-success' id='ch_password'>Change Password</button> 
                                                        <?php }else{ ?>
                                                                <button type='button' class='btn btn-primary' disabled id='ch_user'>Change User</button>
                                                                <button type='button' class='btn btn-success' disabled id='ch_password'>Change Password</button>
                                                        <?php } ?>
                                                </div>
                                        </div>
                                </main>
                        </div>
                </div>
        </div>
        <?php require_once('app/utils/footer.php'); ?>
        <script src='tools/jquery/jquery.min.js'></script>
        <script src='app/js/functions/activate_update_name.js'></script>
</body>
</html>

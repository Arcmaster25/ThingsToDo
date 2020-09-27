<!DOCTYPE>
<html>
<head LANG='en'>
        <meta charset='UFT-8'>
        <link rel='stylesheet' href='../../public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body> 
        <?php require_once('../utils/header.php'); ?>
        <div class='container'>
                <div class='row'>
                        <div class='col-12'>
                                <h1 class='text-center mt-3'>Profile</h1>
                                <main class='card text-center'> 
                                        <div class='card-body mt-3'>
                                                <form method='POST'>
                                                        <div class='form-group'>
                                                                <label for='user'>User</label>
                                                                <input type='text' disabled class='form-control' name='user'>
                                                        </div>
                                                        <div id='user_form'>
                                                                <div class='form-group'>
                                                                        <label for='usr'>New User</label>
                                                                        <input type='text' class='form-control' name='usr'>
                                                                </div>
                                                                <div class='form-group'>
                                                                        <button type='submit' class='btn btn-success' formaction=''>Confirm Change</button>
                                                                </div>
                                                        </div>
                                                        <div class='form-group'>
                                                                <label for='pss'>Password</label>
                                                                <input type='password' disabled class='form-control' name='pss'>
                                                        </div>
                                                        <div id='password_form'>
                                                                <div class='form-group'>
                                                                        <label for='pss_new'>New Password</label>
                                                                        <input type='password' class='form-control' name='pss_new'>
                                                                </div>
                                                                <div class='form-group'>
                                                                        <label for='pss_conf'>Confirm Password</label>
                                                                        <input type='password' class='form-control' name='pss_conf'>
                                                                </div>
                                                                <div class='form-group'>
                                                                        <button type='submit' class='btn btn-success' formaction=''>Confirm Change</button>
                                                                </div>
                                                        </div>
                                                </form>
                                                <div>
                                                        <button type='button' class='btn btn-primary' id='ch_user'>Change User</button>
                                                        <button type='button' class='btn btn-success' id='ch_password'>Change Password</button> 
                                                </div>
                                        </div>
                                </main>
                        </div>
                </div>
        </div>
        <?php require_once('../utils/footer.php'); ?>
        <script src='../../tools/jquery/jquery.min.js'></script>
        <script src='../js/functions/activate_update_name.js'></script>
</body>
</html>

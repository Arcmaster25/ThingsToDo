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
                                                <form>
                                                        <div class='form-group'>
                                                                <label for=''>User</label>
                                                                <input type='text' disabled class='form-control'>
                                                        </div>
                                                        <div class='form-group'>
                                                                <label for=''>Password</label>
                                                                <input type='password' disabled class='form-control'>
                                                        </div>
                                                </form>
                                                <div>
                                                        <button type='button' class='btn btn-primary'>Change User</button>
                                                        <button type='button' class='btn btn-success'>Change Password</button> 
                                                </div>
                                        </div>
                                </main>
                        </div>
                </div>
        </div>
</body>
</html>

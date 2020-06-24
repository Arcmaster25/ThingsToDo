<!DOCTYPE>
<html>
<head LANG='en'>
        <meta charset='UFT-8'>
        <link rel='stylesheet' href='public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body> 
        <?php if($message != ''){ ?>
                <div class='alert alert-danger'>
                        <?php echo $message; ?>
                </div>
        <?php } ?>
        <div class='container mt-5'>
                <div class='card text-center'>
                        <div class='card-header'>
                                <h2 class='card-title'>Login</h2>
                        </div> 
                        <div class='card-body'>
                                <form action='index.php?controller=user&action=login' method='POST'>
                                        <div class='form-group'>
                                                <label for='usr'>User</label>
                                                <input type='text' class='form-control' name='usr'>
                                        </div>
                                        <div class='form-group'>
                                                <label for='pss'>Password</label>
                                                <input type='password' class='form-control' name='pss'>
                                        </div>
                                        <div class='form-group'>
                                                <button type='success' class='btn btn-primary'>Login</button>
                                                <a href='index.php?controller=user&action=registry' class='btn btn-link'>Registry</a>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</body>
</html>

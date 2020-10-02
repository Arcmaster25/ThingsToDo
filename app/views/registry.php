<!DOCTYPE>
<html>
<head LANG='en'>
        <meta charset='UFT-8'>
        <link rel='stylesheet' href='public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body> 
        <?php if($message != 'El usuario fue creado de forma satisfactoria'){ ?>
                <?php if($message == ''){}else{ ?>
                        <div class='alert alert-danger text-center'>
                                <?php $message ?>
                        </div>
                <?php } ?>
        <?php }else{ ?>
                <div class='alert alert-success text-center'>
                        <?php $message ?>
                </div>
                <?php header('Location: index.php?controller=user&action=login'); ?>
        <?php } ?>
        <div class='container my-5'>
                <div class='card text-center'>
                        <div class='card-header'>
                                <h2 class='card-title'>Registry</h2>
                        </div> 
                        <div class='card-body'>
                                <form action='index.php?controller=user&action=registry' method='POST'>
                                        <div class='form-group'>
                                                <label for='usr'>User</label>
                                                <input type='text' class='form-control text-center' name='usr'>
                                        </div>
                                        <div class='form-group'>
                                                <label for='pss'>Password</label>
                                                <input type='password' class='form-control text-center' name='pss'>
                                        </div>
                                        <div class='form-group'>
                                                <button type='success' class='btn btn-primary'>Registry</button>
                                                <hr>
                                                <p>
                                                        Terminos y condiciones para el uso de la plataforma
                                                        <a href='#' class='btn btn-link'>Leer terminos y condiciones</a>
                                                </p>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</body>
</html>

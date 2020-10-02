<!DOCTYPE> 
<html>
<head>
</head>
<body>        
        <nav class='navbar navbar-expand navbar-dark bg-dark'>
                <a class='navbar-brand' href='index.php'>ThingToDo</a>
                <div class='d-flex justify-content-end'>
                        <ul class='navbar-nav'>
                                <li class='nav-item'>
                                        <a class='nav-link' href='index.php?controller=user&action=profile'>Profile</a>
                                </li>
                                <li class='nav-item'>
                                        <a class='nav-link' href='index.php?controller=list&action=index'>List</a>
                                </li>
                        </ul>
                        <div class='ml-5'>
                                <?php if($user_id == ''){ ?>
                                        <a href='index.php?controller=user&action=login' class='btn btn-outline-primary'>Log In</a>
                                        <a href='index.php?controller=user&action=registry' class='btn btn-outline-danger'>Registry</a>
                                <?php }else{ ?>
                                        <a href='index.php?controller=user&action=logout' class='btn btn-link'>Log Out</a>
                                <?php } ?>
                        </div>
                </div> 
        </nav>
</body>
</html>

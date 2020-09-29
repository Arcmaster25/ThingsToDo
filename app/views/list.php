<!DOCTYPE> 
<html>
<head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='../../public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body>
        <?php require_once('../utils/header.php'); ?>        
        <?php require_once('../utils/modals.php'); ?>
        <div class='container mt-2 text-center'>
                <div class='row'>
                        <aside class='col-4 p-2 border-right border-secondary'>
                                <h2 class='d-flex flex-row justify-content-around'>
                                        My List`s
                                        <button type='button' class='btn btn-info rounded-circle border-0' data-toggle='modal' data-target='#create_list'>
                                                <span class='text-uppercase font-weight-bold'>+</span>
                                        </button>
                                </h2>
                                <ul class='list-group mt-4 mr-4'>
                                </ul>
                        </aside>
                        <main class='col-8 p-2'>
                                <h2 class='d-flex flex-row justify-content-around'>
                                        List: 
                                        <button type='button' class='btn btn-info rounded-circle border-0' disabled data-toggle='modal' data-target='#create_task'>
                                                <span class='text-uppercase font-weight-bold'>+</span>
                                        </button>
                                </h2>
                                <ul class='list-group'>
                                </ul>
                        </main>
                </div>
        </div>
        <?php require_once('../utils/footer.php'); ?> 
        <script src='../../tools/jquery/jquery.min.js'></script>
        <script src='../../tools/popper/popper.min.js'></script>
        <script src='../../tools/bootstrap/dist/js/bootstrap.min.js'></script>
</body>
</html>

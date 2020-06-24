<!DOCTYPE> 
<html>
<head>
        <meta charset='UTF-8'>
        <link rel='stylesheet' href='public/css/main.css'>
        <title>ThingToDo</title>
</head>
<body>
        <?php require_once('app/utils/header.php'); ?>        
        <?php require_once('app/utils/modals.php'); ?>
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
                                        <?php if($all_list == null || $all_list == '' || $all_list == 0){ ?>
                                                <p class='text-monospace'>No has creado ninguna lista</p>
                                        <?php }else{ ?>
                                                <?php foreach($all_list as $list_item){ ?>
                                                        <li class='list_group_item'>
                                                                <span class='text-monospace'><?php echo $list_item['list_name'] ?></span>
                                                                <a href='index.php?controller=list&action=content' class='btn btn-outline-success'>show</a>
                                                                <button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#update_list'>update</button>
                                                                <a href="index.php?controller=list&action=delete&list_id=<?php echo $list_item['id'] ?>" class='btn btn-outline-delete'>delete</a>
                                                        </li>
                                                <?php } ?>
                                        <?php } ?>
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
                                        <?php if($user_id == ''){ ?>
                                                <p class='text-monospace'>Debes loguearte para ver tus tareas</p>
                                        <?php } ?>
                                        <?php if($all_task == null || $all_task == '' || $all_task == 0){ ?>
                                                <p class='text-monospace'>No has creado ninguna tarea</p>
                                        <?php }else{ ?>
                                                <?php foreach($all_task as $task){ ?>
                                                        <li class='list_group_item'>
                                                                <span class='text-monospace'><?php echo $task['homework_name'] ?></span>
                                                                <button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#update_task'>update</button>
                                                                <button type='button' class='btn btn-outline-delete'>delete</button>
                                                        </li>
                                                <?php } ?>
                                        <?php } ?>
                                </ul>
                        </main>
                </div>
        </div>
        <?php require_once('app/utils/footer.php'); ?> 
        <script src='tools/jquery/jquery.min.js'></script>
        <script src='tools/popper/popper.min.js'></script>
        <script src='tools/bootstrap/dist/js/bootstrap.min.js'></script>
</body>
</html>

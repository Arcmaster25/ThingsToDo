<!DOCTYPE>
<html>
<head>
</head>
<body>
        <div class='modal fade' id='create_list' tabindex='-1'>
                <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                                <div class='modal-header text-center'>
                                        <h4 class='modal-title'>Create List</h4>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                        </button>
                                </div>
                                <div class='modal-body'>
                                        <form class='text-center' action='index.php?controller=list&action=add' method='POST'>
                                                <div class='form-group'>
                                                        <label for='ls_name'>List Name</label>
                                                        <input type='text' class='form-control' name='ls_name'>
                                                </div>
                                                <?php if($user_id == ''){ ?>
                                                        <button type='submit' disabled class='btn btn-success'>Create</button>
                                                <?php }else{ ?>
                                                        <button type='submit' class='btn btn-success'>Create</button>
                                                <?php } ?>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        <div class='modal fade' id='create_task' tabindex='-1'>
                <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                                <div class='modal-header text-center'>
                                        <h4 class='modal-title'>Create Task</h4>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                        </button>
                                </div>
                                <div class='modal-body'>
                                        <form class='text-center'>
                                                <div class='form-group'>
                                                        <label for='ts_name'>Task Name</label>
                                                        <input type='text' class='form-control' name='ts_name'>
                                                        <input type="hidden" id='id_for_task' value=''>
                                                </div>
                                                <button type='submit' class='btn btn-success'>Create</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        <div class='modal fade' id='update_list' tabindex='-1'>
                <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                                <div class='modal-header text-center'>
                                        <h4 class='modal-title'>Update List</h4>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                        </button>
                                </div>
                                <div class='modal-body'>
                                        <form class='text-center' action='index.php?controller=list&action=update' method='POST'>
                                                <div class='form-group'>
                                                        <label for='up_list'>List Name</label>
                                                        <input type='text' class='form-control' name='up_list'>
                                                </div>
                                                <input type='hidden' name='list_id' id='list_id' value=''>
                                                <button type='submit' class='btn btn-success'>Update</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        <div class='modal fade' id='update_task' tabindex='-1'>
                <div class='modal-dialog modal-dialog-centered'>
                        <div class='modal-content'>
                                <div class='modal-header text-center'>
                                        <h4 class='modal-title'>Update task</h4>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                        </button>
                                </div>
                                <div class='modal-body'>
                                        <form class='text-center'>
                                                <div class='form-group'>
                                                        <label for='up_list'>List Name</label>
                                                        <input type='text' class='form-control' name='up_list'>
                                                </div>
                                                <input type="hidden" name='homework_id' id='homework_id' value=''>
                                                <input type="hidden" name='homework_id' id='homework_list_id' value=''>
                                                <button type='submit' class='btn btn-success' id='update_btn'>Update</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</body>
</html>

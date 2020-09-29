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
                                        <form class='text-center' action='' method='POST'>
                                                <div class='form-group'>
                                                        <label for='ls_name'>List Name</label>
                                                        <input type='text' class='form-control' name='ls_name'>
                                                </div>
                                                <button type='submit' class='btn btn-success'>Create</button>
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
                                        <form class='text-center' action='' method='POST'>
                                                <div class='form-group'>
                                                        <label for='ts_name'>Task Name</label>
                                                        <input type='text' class='form-control' name='ts_name'>
                                                </div>
                                                <button type='submit' class='btn btn-success'>Create</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</body>
</html>

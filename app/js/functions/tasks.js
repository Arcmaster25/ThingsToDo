let aside_ul = $('aside ul');
let main = $('main h2 button');
let main_ul = $('main ul');
let task_button = $('#create_task button[type=submit]');
let update_btn = $('#update_btn');
function get_tasks(button_id){
    $.ajax({
        type: "GET",
        url: "index.php?controller=list&action=content",
        data: {list_id: button_id},
        dataType: "json",
        success: function (response) {
            if($.isEmptyObject(response)){
                $('main ul').html("<p class='text-monospace'>No has creado ninguna tarea</p>")
            }else{
                if($('main ul').html() != null){
                    $('main ul').html('');
                    let html = '';
                    $.each(response, function(i, item){
                        html += "<li class='list-group-item'>" +
                                    "<span class='text-monospace'>" + " " + item.homework_name + " " + "</span>" +
                                    "<button type='button' class='btn btn-outline-warning btn-sm up-task' data-toggle='modal' data-target='#update_task' value=" + item.id +">update</button>" +
                                    "<button type='button' class='btn btn-outline-danger btn-sm delete-task' value=" + item.id + ">delete</button>" +
                                    "<span class='list_id' id=" + item.list_id +"></span>" +
                                "</li>";
                        $('main ul').html(
                            html
                        );
                    });
                }
            }
        },
        error: function(xhr, status, error){
            console.log(xhr + "," + status + "," + error);
        }
    });
}
setInterval(function(){
    $('main ul').each(function(){
        let up_task = $(this).children().find('button.up-task');
        let delete_task = $(this).children().find('button.delete-task');
        $(up_task).click(function(){
            let task_id = $(this).attr('value');
            let list_id = $(this).next().next().attr('id');
            $('#homework_id').attr('value', task_id);
            $('#homework_list_id').attr('value', list_id);
        });
        $(delete_task).click(function(){
            let task_id = $(this).attr('value');
            let list_id = $(this).next().attr('id');
            $.ajax({
                type: "POST",
                url: "index.php?controller=homework&action=delete",
                data: {homework_id: task_id},
                success: function(response){
                    get_tasks(list_id);
                },
                error: function(xhr, status, error){
                    console.log(xhr + " , " + status + " , " + error);
                }
            });
        })
    });
}, 1000);
$(aside_ul).each(function(){
    let button = $(this).find('button.contents');
    $(button).click(function(){
        let button_id = $(this).attr('value');
        let list_name = $(this).prev().text();
        let create_task = $('#id_for_task').attr('value', button_id);
        if($(main).attr('disabled') == 'disabled'){
            $(main).removeAttr('disabled');
        }else{
            $(main).attr('disabled', 'true');
        }
        if($(this).html() == 'select'){
            $(this).html('deselect');
            get_tasks(button_id);
        }else{
            $(this).html('select');
            $('main ul').html('');
        }
        if($('main h2 span#list_name').text() == ''){
            $('main h2 span#list_name').text(list_name);
        }else{
            $('main h2 span#list_name').text('');
        }
    });
});
$(task_button).click(function (e) {
    e.preventDefault();
    let task_name = $('#create_task input[type=text]').val();
    let list_id = $('#id_for_task').attr('value');
    $.ajax({
        type: "POST",
        url: "index.php?controller=homework&action=add",
        data: {hw_name: task_name, hw_id: list_id},
        success: function(response){
            get_tasks(list_id);
        },
        error: function(xhr, status, error){
            console.log(xhr + "," + status + "," + error);
        }
    });
});
$(update_btn).click(function(e){
    e.preventDefault();
    let task_name = $('#update_task input[type=text]').val();
    let homework_id = $('#homework_id').attr('value');
    let list_id =  $('#homework_list_id').attr('value');
    $.ajax({
        type: "POST",
        url: "index.php?controller=homework&action=update",
        data: {new_name: task_name, homework_id: homework_id},
        success: function(response){
            get_tasks(list_id);
        },
        error: function(xhr, status, error){
            console.log(xhr + "," + status + "," + error);
        }
    });
});
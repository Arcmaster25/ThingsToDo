let list = $('aside ul');
let modal_id = $('#list_id');
//console.log(id_value);
console.log(modal_id);
$(list).each(function(){
        let button = $(this).find('button[value=""]');
        $(button).click(function(){
                let id_value = $(button).attr('value');
                $(modal_id).attr('value', id_value);
                console.log(id_value);
                console.log(modal_id);
        });
});

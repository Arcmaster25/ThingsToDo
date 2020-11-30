let list = $('aside ul');
let modal_id = $('#list_id');
console.log(modal_id);
$(list).each(function(){
        let button = $(this).find('button.btn');
        $(button).click(function(){
                let id_value = $(button).attr('value');
                $(modal_id).attr('value', id_value);
        });
});

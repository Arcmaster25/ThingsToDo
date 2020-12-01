let aside_ul = $('aside ul');
let main = $('main h2 button');
$(aside_ul).each(function(){
    let button = $(this).find('button.contents');
    $(button).click(function(){
        if($(main).attr('disabled') == 'disabled'){
            $(main).removeAttr('disabled');
        }else{
            $(main).attr('disabled', 'true');
        }
    });
});
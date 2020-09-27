$('#user_form').hide();
$('#password_form').hide();
$('#ch_user').click(function(){
        $('#user_form').slideToggle();
});
$('#ch_password').click(function(){
        if($('input[name="pss"]').attr('disabled')){
                $('input[name="pss"]').removeAttr('disabled');
        }else{
                $('input[name="pss"]').attr('disabled', 'yes');
        }
        $('#password_form').slideToggle();
});

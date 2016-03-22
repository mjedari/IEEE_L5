/**
 * Created by Mahdia on 2/28/2016.
 */
/* Ajax contact send */
$(document).ready(function(){
    $('.send-button').click(function($e){
        $e.preventDefault();
        $.ajax({
            url: '/contact/store',
            type: "POST",
            dataType: 'JSON',
            data: {
                'name': $('.name-input').val(),
                'email': $('.email-input').val(),
                'phone': $('.phone-input').val(),
                'subject': $('.subject-input').val(),
                'message': $('.message-input').val(),
                '_token': $('input[name=_token]').val()
            },
            success: function(data){
                console.log(data.store_status)
//                    if (data.subscribe_status){
//                        $('.glyphicon-ok').css({'visibility': 'visible'});
//                    }
            },
            beforeSend: function() {
                $('.loading').show()
            },
            complete: function() {
                $('.loading').hide()
            }
        });
    });
});
/**
 * Created by Mahdia on 2/28/2016.
 */

/* mini subscribe ajax */
$(document).ready(function(){
    $('.subscribe-button').click(function($e){
        $e.preventDefault();
        $.ajax({
            url: '/subscribe',
            type: "POST",
            dataType: 'JSON',
            data: {'email': $('.email-input').val(), '_token': $('input[name=_token]').val()},
            success: function(data){
                console.log(data.subscribe_status)
                if (data.subscribe_status){
                    $('.glyphicon-ok').css({'visibility': 'visible'});
                }
            },
            beforeSend: function() {
                $('.loading').show()
            },
            complete: function() {
                $('.loading').hide()
            }
        });
    });

    $(".disabled-link").click(function(event) {
        event.preventDefault();
    });

    //custom scroll bar
    $(function () {
        $('.scrollable_div').scrollator();
    });
});
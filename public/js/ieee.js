/**
 * Created by Mahdia on 2/28/2016.
 */

//subscribe ajax
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
                        $('.status-mark').addClass('glyphicon-ok green-color').removeClass( "glyphicon-remove red-color" ).fadeIn( 200).delay( 2000 ).fadeOut(200);
                    }
                    if (!data.subscribe_status) {
                        $('.status-mark').addClass('glyphicon-remove red-color').removeClass( "glyphicon-ok green-color" ).fadeIn( 200).delay( 2000 ).fadeOut(200);
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
        ////custom scroll bar
        $(function () {
            $('.scrollable_div').scrollator();
        });

        $(".pager > li > a").click(function($e) {
            $e.preventDefault();
            var pageUrl = $(this).attr("href");
            var page = pageUrl.substr(pageUrl.length - 1)
            $.ajax({
                url: '/',
                type: "GET",
                dataType: 'JSON',
                data: {'page': page},
                success: function (data) {
                    $('.news-row').html(data.html);
                    ////Reload custom scroll bar
                    $(function () {
                        $('.scrollable_div').scrollator();
                    });
                }
            });
        });

});
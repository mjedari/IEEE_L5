<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:300px;width:350px;'>
    <div id='gmap_canvas' style='height:300px;width:350px;'></div>
    <div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div>
    <div><small><a href="http://www.autohuren.world/">autohuren</a></small></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(35.76224029153933,51.33903431791383),mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.76224029153933,51.33903431791383)});
        infowindow = new google.maps.InfoWindow({content:'<strong>IACT IEEE Student Branch</strong><br> Islamic Azad Universiry Tehran Center Branch Faculty of Engineering<br>'});
        google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
        infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>

<?php

include_once 'locations_model.php';
?>


<div id="map" style="width:100%;height:1000px;"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var france = {lat: 14.9021, lng: 120.5509};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 13
        });
       

        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    $("#id").val(locations[i][0]);
                    $("#title").val(locations[i][4]);
                    $("#sqrt").val(locations[i][6]);
                    $("#price").val(locations[i][7]);
                    $("#description").val(locations[i][3]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

 


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>

<div style="display: none" id="form">
    <table class="map1">
    <tr>
    <input name="id" type='hidden' id='id'/>
            <td><b>Title:</b></td>
            <td><input id='title' type='text' name='title' readonly></td>
        </tr>
        <tr>
  
            <td><b>Size (Sqrt):</b></td>
            <td><input id='sqrt' type='text' name='sqrt' readonly></td>
        </tr>
        <tr>
  
  <td><b>Price:</b></td>
  <td><input id='price' type='text' name='price' readonly></td>
</tr>

        <tr>
            
           
           
            <td><a>Address:</a></td>
            <td><textarea disabled id='description' placeholder='Description'></textarea></td>
        </tr>
     

      
    </table>
</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyDH3VIyh74l7Bw6v74uA5soBYccobpTQ7A&callback=initMap">
</script>

<html>

<body onLoad="initialize()">

    <div id="map_canvas"></div>

    <!-- <div id="latlong">
        <p>Latitude: <input size="20" type="text" id="latbox" name="lat"></p>
        <p>Longitude: <input size="20" type="text" id="lngbox" name="lng"></p>
    </div> -->

</body>

</html>

<cfoutput>
    <script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCVtoU6ioC5PVtX8DeQD7ZWpy8AJvvmO9E">
    </script>
</cfoutput>

<script type="text/javascript">
//<![CDATA[

// global "map" variable
var map = null;
var marker = null;

// popup window for pin, if in use
var infowindow = new google.maps.InfoWindow({
    size: new google.maps.Size(150, 50)
});

// A function to create the marker and set up the event window function
function createMarker(latlng, name, html) {

    var contentString = html;

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat() * -100000) << 5
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString);

        infowindow.open(map, marker);


    });

    google.maps.event.trigger(marker, 'click');

    return marker;

}

function initialize() {

    // the location of the initial pin
    var myLatlng = new google.maps.LatLng(9.59178059790211, 76.53152575399213);

    // create the map
    var myOptions = {
        zoom: 19,
        center: myLatlng,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        },
        navigationControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    // establish the initial marker/pin
    var image = '/images/pin2.png';
    marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image,
        title: "Property Location"
    });

    // establish the initial div form fields
    formlat = document.getElementById("latbox").value = myLatlng.lat();
    formlng = document.getElementById("lngbox").value = myLatlng.lng();

    // close popup window
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
    });

    // removing old markers/pins
    google.maps.event.addListener(map, 'click', function(event) {
        //call function to create marker
        if (marker) {
            marker.setMap(null);
            marker = null;
        }

        // Information for popup window if you so chose to have one

        //marker = createMarker(event.latLng, "name", "<b>Location</b><br>" + event.latLng);


        var image = '/images/pin2.png';
        var myLatLng = event.latLng;
        /*
        var marker = new google.maps.Marker({
            by removing the 'var' subsquent pin placement removes the old pin icon
        */
        marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image,
            title: "Property Location"
        });

        // populate the form fields with lat & lng
        formlat = document.getElementById("latbox").value = event.latLng.lat();
        formlng = document.getElementById("lngbox").value = event.latLng.lng();

    });

}
//]]>
</script>

<script type="text/javascript">
// $('#map_canvas').on('click', function () {
//     var text_val = $('.poi-info-window gm-style title').find('.address-line full-width').html();
//     alert(text_val);
// });
</script>
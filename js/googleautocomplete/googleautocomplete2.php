<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>
<body>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-1NczEtQqYZCz_tMQDvsuTlOQq7lbnhA&sensor=false&libraries=places&v=weekly"></script>

  
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
            google.maps.event.addListener(places, 'place_changed', function () {
                console.log(places);
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                alert(mesg);
            });
        });
    </script>
    <span>Location:</span>
    <input type="text" id="txtPlaces" style="width: 250px" placeholder="Enter a location" />
</body>
</html>
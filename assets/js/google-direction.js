let X; // Put your X coordinate here for the map if your variable is in PHP just var X = <?php echo $x_coordinate ?>:
let Y; // Put your Y coordinate here for the map if your variable is in PHP just var Y = <?php echo $Y_coordinate ?>:

function initMap() {
    // Origin = new google.maps.LatLng(1.3730,103.94928); //temperory
    let TransmitterSite1 = new google.maps.LatLng(57.985271,-4.583482);
    let TransmitterSite2 = new google.maps.LatLng(57.484019,-4.460446);
    let TransmitterSite3 = new google.maps.LatLng(57.659747,-3.607586);
    let TransmitterSite4 = new google.maps.LatLng(57.195974,-3.824128);
    let TransmitterSite5 = new google.maps.LatLng(56.591103,-4.321430);
    let TransmitterSite6 = new google.maps.LatLng(56.275936,-2.882367);
    let TransmitterSite7 = new google.maps.LatLng(59.104631,-3.339777);
    let TransmitterSite8 = new google.maps.LatLng(60.299138,-1.652656);

    let BaseStation = new google.maps.LatLng(57.233984,-2.764946);
    //    if(X>1000 || Y>1000){
    //        var newlatlong = $.ajax({
    //            async: false,
    //            url: "https://developers.onemap.sg/commonapi/convert/3414to4326?X=" + X + "&Y=" + Y,
    //        }).responseJSON;
    //        Destination = new google.maps.LatLng(newlatlong["latitude"], newlatlong["longitude"]);
    //    }
    //    else{
    //        Destination = new google.maps.LatLng(Lat, Long);
    //    }
    let options = {
        zoom: 7,
        center: TransmitterSite2,
        styles: [
            { elementType: 'geometry', stylers: [{ color: '#242f3e' }] },
            {
                elementType: 'labels.text.stroke',
                stylers: [{ color: '#242f3e' }]
            },
            {
                elementType: 'labels.text.fill',
                stylers: [{ color: '#746855' }]
            },
            {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#d59563' }]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#d59563' }]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{ color: '#263c3f' }]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#6b9a76' }]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{ color: '#38414e' }]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{ color: '#212a37' }]
            },
            {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#9ca5b3' }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{ color: '#746855' }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{ color: '#1f2835' }]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#f3d19c' }]
            },
            {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{ color: '#2f3948' }]
            },
            {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#d59563' }]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{ color: '#17263c' }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{ color: '#515c6d' }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{ color: '#17263c' }]
            }
        ]
    };
    let map = new google.maps.Map(
        document.getElementById('googleMap'),
        options
    );

    google.maps.event.addListenerOnce(map, 'load', function() {
        $(window).trigger('resize');
    });

    let marker1 = new google.maps.Marker({
        position: TransmitterSite1,
        map: map
    });
    let marker2 = new google.maps.Marker({
        position: TransmitterSite2,
        map: map
    });
    let marker3 = new google.maps.Marker({
        position: TransmitterSite3,
        map: map
    });
    let marker4 = new google.maps.Marker({
        position: TransmitterSite4,
        map: map
    });
    let marker5 = new google.maps.Marker({
        position: TransmitterSite5,
        map: map
    });
    let marker6 = new google.maps.Marker({
        position: TransmitterSite6,
        map: map
    });
    let marker7 = new google.maps.Marker({
        position: TransmitterSite7,
        map: map
    });
    let marker8 = new google.maps.Marker({
        position: TransmitterSite8,
        map: map
    });
    let BaseMarker = new google.maps.Marker({
        position: BaseStation,
        map: map
    });


    let infoWindow1 = new google.maps.InfoWindow({
        content: "TransmitterSite 1"
    }); // Add a text when you click the marker
    marker1.addListener('click', function() {
        infoWindow1.open(map, marker1);
    });

    let infoWindow2 = new google.maps.InfoWindow({
        content: "TransmitterSite 2"
    }); // Add a text when you click the marker
    marker2.addListener('click', function() {
        infoWindow2.open(map, marker2);
    });

    let infoWindow3 = new google.maps.InfoWindow({
        content: "TransmitterSite 3"
    }); // Add a text when you click the marker
    marker3.addListener('click', function() {
        infoWindow3.open(map, marker3);
    });

    let infoWindow4 = new google.maps.InfoWindow({
        content: "TransmitterSite 4"
    }); // Add a text when you click the marker
    marker4.addListener('click', function() {
        infoWindow4.open(map, marker4);
    });

    let infoWindow5 = new google.maps.InfoWindow({
        content: "TransmitterSite 5"
    }); // Add a text when you click the marker
    marker5.addListener('click', function() {
        infoWindow5.open(map, marker5);
    });

    let infoWindow6 = new google.maps.InfoWindow({
        content: "TransmitterSite 6"
    }); // Add a text when you click the marker
    marker6.addListener('click', function() {
        infoWindow6.open(map, marker5);
    });

    let infoWindow7 = new google.maps.InfoWindow({
        content: "TransmitterSite 7"
    }); // Add a text when you click the marker
    marker7.addListener('click', function() {
        infoWindow7.open(map, marker7);
    });

    let infoWindow8 = new google.maps.InfoWindow({
        content: "TransmitterSite 8"
    }); // Add a text when you click the marker
    marker8.addListener('click', function() {
        infoWindow8.open(map, marker8);
    });

    let BaseWindow = new google.maps.InfoWindow({
        content: "Base Station"
    }); // Add a text when you click the marker
    BaseMarker.addListener('click', function() {
        BaseWindow.open(map, BaseMarker);
    });
}

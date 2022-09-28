function initMap2() {
    // map options
    var options = {
        zoom: 8,
        center: {lat:42.3601,lng:-71.0589}
    }

    // new map

    var map = new
    google.maps.Map(document.getElementById('map'), options);

    
    // add marker
    var marker = new google.maps.Marker({
        position: {lat:41.8781,lng:87.6298},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
    });

    var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
    });

    marker.addListener('click', function(){
        infoWindow.open(map, marker);
    }) 
    

addMarker({lat:41.8781,lng:-87.6298})
    //addMarker({lat:42.8584,lng:-70.9300})
    //addMarker({lat:42.7762,lng:-71.0773})

    function addMarker(coords){
        var marker = new google.maps.Marker({
        position:coords,
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
    });
    }
}

initMap2();
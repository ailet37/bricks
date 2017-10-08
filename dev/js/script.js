(function () {
    if ($('.js-banner').length) {
        var mainBanner = new Swiper('.js-banner', {
            pagination: '.js-banner-pag',
            speed: 1500,
            paginationClickable: true
        });
    }
})();


function initMap() {
    var layer = [
        {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#444444"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#f2f2f2"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "saturation": -100
                },
                {
                    "lightness": 45
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#aad2e3"
                },
                {
                    "visibility": "on"
                }
            ]
        }
    ];
    var uluru = {lat: 54.727468, lng: 55.986551};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru,
        disableDefaultUI: true,
        styles: layer
    });

    //map.mapTypes.set('styled_map', layer);
    //map.setMapTypeId('styled_map');

    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        icon: '/wp-content/themes/bricks/assets/svg/map-marker.svg'
    });

    google.maps.event.addDomListener(window, 'resize', function () {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize")
        map.setCenter(center)
    })
}

google.maps.event.addDomListener(window, "load", initMap);

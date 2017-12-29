(function () {
    if ($('.js-banner').length) {
        var mainBanner = new Swiper('.js-banner', {
            pagination: '.js-banner-pag',
            speed: 1500,
            loop:true,
            autoplay: 3000,
            paginationClickable: true
        });
    }
    if ($('.js-works-slider').length) {
        var worksSlider = new Swiper('.js-works-slider', {
            pagination: '.js-works-pag',
            paginationType: 'fraction',
            prevButton: '.js-works-prev',
            nextButton: '.js-works-next',
            //slidesPerView: 1,
            slidesPerView: 'auto',
            spaceBetween: 20,
            speed: 1500,
            loop:true,
            paginationClickable: true
        });
    }

    //header menu mobile
    $('.js-open-mobile-menu').on('click', function() {
        $('.js-menu').toggleClass('_opened');
        $('body').toggleClass('_modal-opened');
    });

    $('.js-close-mobile-menu').on('click', function() {
        $('.js-menu').toggleClass('_opened');
        $('body').toggleClass('_modal-opened');
    });

    //modal
    $('.js-callback-open').on('click', function() {
        $('.js-callback-modal').addClass('_shown');
    });

    $('.js-modal-close').on('click', function() {
        $(this).closest('.modal').removeClass('_shown');
    });

    //order
    $('.js-order-open').on('click', function() {
        $('.js-order-modal').addClass('_shown');
    });
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
        google.maps.event.trigger(map, "resize");
        map.setCenter(center)
    })
}

//google.maps.event.addDomListener(window, "load", initMap);


var defaultInputZone = 10; var defaultInputCorners = 4;
//var defaultInputTubes = 2;

var textureMatteWhite = 249;var textureMatteColor = 286;
var textureSatinWhite = 280; var textureSatinColor = 322;
var textureGlossWhite = 310; var textureGlossColor = 356;
var textureClothWhite = 800; var textureClothColor = 950;

var patternCorner = $('.js-corners').data('cost') || 100; var patternCornerMax = 4;
var edgingCorner = 250; var edgingCornerMax = 2;

function doCalc(){
    var texture = $('input[name=texture]:checked', '#js-calc-form').val();
    var color = $('input[name=color]:checked', '#js-calc-form').val();
    var texturePrice = window[texture+color];

    var image = $('#js-calc-image');

    if(image.attr('data') != texture+color){
        image.hide();
        image.css('background-image','url(/uploads/image/calc/'+texture+color+'.jpg)');
        image.attr('data',texture+color);
        image.fadeIn(1000);
    }

    var inputZone = defaultInputZone;
    var inputCorners = defaultInputCorners;
    //var inputTubes = defaultInputTubes;
    var userInputZone = $('#in1').val();
    var userInputCorners = $('#in2').val();
    //var userInputTubes = $('#in3').val();

    if($.isNumeric(userInputZone) && userInputZone > 0){ inputZone = userInputZone; }
    if($.isNumeric(userInputCorners) && userInputCorners > 0){ inputCorners = userInputCorners; }
    //if($.isNumeric(userInputTubes) && userInputTubes > 0){ inputTubes = userInputTubes; }

    var totalPrice = texturePrice*inputZone;

    if(inputCorners > patternCornerMax){
        inputCorners = inputCorners - patternCornerMax;
        totalPrice = totalPrice+(inputCorners*patternCorner);
    }

    // if(inputTubes > edgingCornerMax){
    //     inputTubes = inputTubes - edgingCornerMax;
    //     totalPrice = totalPrice+(inputTubes*edgingCorner);
    // }

    $('#js-calc-price').html(totalPrice);
}

function calcPlus(obj){

    var input = $('#'+$(obj).attr('data'));
    if(!$.isNumeric(input.val())){
        input.val("0");
    } else {
        var newnum = eval(input.val().trim());
        newnum++;
        input.val(newnum);
    }
    if(input.val() > 9999) { input.val(1); }
    doCalc();
}

function calcMinus(obj){

    var input = $('#'+$(obj).attr('data'));
    if(!$.isNumeric(input.val()) || eval(input.val())-1<0){
        input.val("0");
    } else {
        var newnum = eval(input.val().trim());
        newnum--;
        input.val(newnum);
    }
    doCalc();
}

$(document).ready(function(){
    $(document).on('input', '#in1, #in2, #in3', function () {
        $(this).val($(this).val().replace(/[^0-9.]/g, ""));
        if($(this).val() > 9999) { $(this).val(1); }
        doCalc();
    });


    $("input[name=texture]:radio,input[name=color]:radio").change(function () {
        doCalc();
    });
    doCalc();
});
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ generalSetting('title') }} | @yield('title') </title>
    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">
    <link rel="shortcut icon" href="{{asset('frontend/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontend/img/apple-touch-icon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Lora:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme-shop.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
    <link id="skinCSS" rel="stylesheet" href="{{asset('frontend/css/skins/skins-1.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
</head>

<body>

    {{-- landing page header nav --}}
    @include('frontend.layouts.parts.header')
    {{-- landing page header nav --}}

    {{-- landing page body --}}
    @yield('content')
    {{-- landing page body --}}

    {{-- landing page footer --}}
    @include('frontend.layouts.parts.footer')
    {{-- landing page footer --}}

    <script src="{{asset('frontend/js/plugins.min.js')}}"></script>
    <script src="{{asset('frontend/js/theme.js')}}"></script>
    <script src="{{asset('frontend/js/views/view.contact.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    {{-- <script src="{{asset('frontend/js/demos/demo-law-firm-2.js')}}"></script> --}}
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/theme.init.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO829Lh70CXSuMVljPW0M1mXCEKN2vWrg"></script>
    <script>
        /*
        Map Settings

            Find the Latitude and Longitude of your address:
                - https://www.latlong.net/
                - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

        */
        function initializeGoogleMaps() {
            // Map Markers
            var mapMarkers = [{
                address: "New York, NY 10017",
                html: "<strong>Porto Law</strong><br>New York, NY 10017",
                icon: {
                    image: "img/map-pin.png",
                    iconsize: [31, 40],
                    iconanchor: [14, 40]
                },
                popup: false
            }];

            // Map Initial Location
            var initLatitude = 16.8305305080377;
            var initLongitude = 96.12190159544329;

            // Map Extended Settings
            var mapSettings = {
                controls: {
                    draggable: (($.browser.mobile) ? false : true),
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true
                },
                scrollwheel: false,
                markers: mapMarkers,
                latitude: initLatitude,
                longitude: initLongitude,
                zoom: 13
            };

            var map = $('#googlemaps').gMap(mapSettings),
                mapRef = $('#googlemaps').data('gMap.reference');

            // Styles from https://snazzymaps.com/
            var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

            var styledMap = new google.maps.StyledMapType(styles, {
                name: 'Styled Map'
            });

            mapRef.mapTypes.set('map_style', styledMap);
            mapRef.setMapTypeId('map_style');
        }

        // Initialize Google Maps when element enter on browser view
        theme.fn.intObs( '.google-map', 'initializeGoogleMaps()', {} );

        // Map text-center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        }

    </script>
</body>

</html>
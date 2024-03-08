<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ generalSetting('title') }} | @yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('img/logo/' . generalSetting('logo')) }}" type="image/jpg">
    <link href="{{ asset('css/main/bootstrap4.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/sweetalert/sweetalert.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/splide/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/backend/app.css') }}">
</head>

<body>
    <div id="wrapper">
        @include('backend.layouts.parts.sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('backend.layouts.parts.header')
            <div>
                <div class="sk-spinner sk-spinner-cube-grid" id="preloader">
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                    <div class="sk-cube"></div>
                </div>
                <div id="content" style="display: none">
                    @yield('content')
                </div>
                @include('backend.layouts.parts.footer')
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="{{ asset('template/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/main/bootstrap4.3.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('template/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('template/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('template/js/plugins/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('template/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/peity-demo.js') }}"></script>
    <script src="{{ asset('template/js/inspinia.js') }}"></script>
    <script src="{{ asset('template/js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('template/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('template/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/sparkline-demo.js') }}"></script>
    <script src="{{ asset('template/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/switchery/switchery.js') }}"></script>
    <script src="{{ asset('template/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/splide/splide.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('template/js/ajax_method.js') }}"></script>
    <script src="{{ asset('template/js/script.js') }}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    @yield('script')
    @include('backend.toastr_message')
    <script>
        $('.switchery').each(function() {
            new Switchery(this);
        });
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        $(window).on('load', function() {
            $('#preloader').fadeOut();
            $('#content').show();
        })
    </script>
    {{-- <script>
        const pusher = new Pusher('79202227f88fad1bf3bb', {
            cluster: 'ap1',
        });
        const channel = pusher.subscribe('generate-keys');
        channel.bind('generate-key', function(res) {
            console.log(res)
            if (res.data.to = 'admin') {
                toastr.options = {
                    "closeButton": true,
                    'debug': true,
                    "progressBar": true,
                    "closeHtml": `<button> <a href="${res.data.href}"> <i class="fa fa-eye"> </i></a> </button>`,
                    "positionClass": "toast-top-center",
                }
                toastr.options.timeOut = 0;
                toastr.options.extendedTimeOut = 0;
                toastr.options.onCloseClick = function() {
                    console.log('close button clicked');
                }
                toastr.info("Trade Request from " + res.data.from);
            }
        });
    </script> --}}
</body>

</html>

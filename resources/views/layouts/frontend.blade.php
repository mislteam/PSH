<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ generalSetting('title') }} | @yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('img/logo/' . generalSetting('logo')) }}" type="image/jpg">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('template/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/frontend/appV3.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/fontawesome6.4/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/fontawesome6.4/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/plugins/sweetalert/sweetalert.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('style')
</head>
<body>
    <nav>
        <div id="desktop_navbar">
            @include('frontend.layouts.parts.desktop_navbar')
        </div>
        <div id="mobile_navbar">
            @include('frontend.layouts.parts.mobile_navbar')
        </div>
    </nav>
    <div class="content-container">
        @yield('content')
    </div>
    @include('frontend.layouts.parts.footer')
    <div id="app" data-url="{{config('app.url')}}"></div>
    <!-- Mainly scripts -->

    <script src="{{asset('js/frontend/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('template/js/jquery-3.1.1.min.js') }}"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="{{ asset('template/js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{asset('js/frontend/app.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Initialize Pusher with your credentials
        // const pusher = new Pusher('dae5f00dabb5f453ee70', {
        //     cluster: 'ap1',
        // });
        // const channel = pusher.subscribe('generate-keys');
        // channel.bind('generate-key', function(data) {
        //     console.log(data)
        // });
    
        // function triggerButton(message) {
        //     Swal.fire({
        //         title: message,
        //         icon: 'success',
        //     })
        // }
    </script>
    <!-- Start of myanmarictsolutioncoltd Zendesk Widget script -->
    {{-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=ccadaa9e-8303-41d2-95d5-76a90586fb31">
    </script> --}}
    <!-- End of myanmarictsolutioncoltd Zendesk Widget script -->
    {{-- Google translate api starts --}}

    <script>
        // Get the selected language from local storage (or default to 'en' if not set)
        let currentLang = localStorage.getItem('lang') || 'en';
        const appUrl = document.getElementById('app').getAttribute('data-url');
        // Set the initially selected language in the dropdown
        $('#languageSelect').val(currentLang);

        // Function to perform translation
        function translatePage(selectedLanguage) {
            const classNamesToTranslate = ['.translate'];

            classNamesToTranslate.forEach(function (className) {
                $(className).each(function () {
                    const originalContent = $(this).text();
                    const proxyUrl = appUrl +'proxy?url=' +
                        encodeURIComponent(`https://translation.googleapis.com/language/translate/v2?key=AIzaSyAiAoYHpQ0rgfbaNnOKTwwEGBUX9jPvDgM&target=${selectedLanguage}&q=${originalContent}`);

                    $.ajax({
                        url: proxyUrl,
                        method: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            const translatedContent = data.data.translations[0].translatedText;
                            $(this).text(translatedContent);
                        }.bind(this),
                        error: function (e, xhr) {
                            console.log(e, xhr);
                        }
                    });
                });
            });
        }

        // Initialize the page with the selected language
        if(currentLang != "en") {
            translatePage(currentLang);
        }

        // Handle language selection changes
        $('#languageSelect').change(function () {
            const selectedLanguage = $(this).val();
            localStorage.setItem('lang', selectedLanguage);
            translatePage(selectedLanguage);
        });


    </script>
    {{-- Google translate api ends --}}
    {{-- @include('backend.toastr_message') --}}
    @yield('script')
</body>

</html>
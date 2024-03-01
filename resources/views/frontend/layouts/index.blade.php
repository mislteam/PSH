<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/fontawesome6.4/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/fontawesome6.4/css/all.min.css')}}">
    
    @yield('style')
    <style>
        #mobile_navbar {
            display: none;
        }
        @media only screen and (max-width: 600px)  {
            #mobile_navbar {
                display : block;
            }

            .footer {
                display: none;
            }

            .banner-img img,  .carousel-item img {
                height: 300px !important;
            }
            
        }

        #desktop_navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 200;
        }
    </style>
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
    
    @yield('content')
    @include('frontend.layouts.parts.footer')
    <script src="{{asset('js/frontend/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function setActiveButton(button, type) {
            $('.toggle-btn').removeClass('active')
            $(button).addClass('active')
            if (type == 'withdraw') {
                $(button).addClass('bg-secondary')
                $('.deposit-container').hide()
                $('.withdraw-container').show()
            } else {            
                $('.withdraw-container').hide()
                $('.deposit-container').show()
            }
        }
    </script>
    @yield('script')
</body>
</html>
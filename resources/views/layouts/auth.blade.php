<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{generalSetting('title')}} | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main/bootstrap4.3.min.css')}}">
    <link href="{{asset('template/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/plugins/bootstrapSocial/bootstrap-social.css')}}" rel="stylesheet">
    @yield('style')
    <style>
      
      .bg-custom {
        background-color: #000000 !important;
      }

      .bg-custom:hover {
            background-color: #000000 !important;
            color: white !important;
        }

      @media only screen and (max-width: 600px)  {
        .custom-file-upload {
            height: 150px;
            width: 100%;
            margin-top: 1em;
        }

        .auth-container  {
            width: 75% !important;
        }

        .image-container img {
            height: 150px;
            width: 100%;
        }

        .img-upload-form {
            margin-top: 2em;
        }
      }
    </style>
</head>
<body>
    @yield('content')
    <script src="{{asset('template/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('js/main/bootstrap4.3.min.js')}}"></script>
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script> --}}
    @yield('script')
    <script>
        $(document).ready(function () {
          $(".input-file").change(function () {
            const file = this.files[0];
            const container = $(this).closest(".custom-file-upload");
            const preview = container.find(".preview-image");
            const form = container.find(".img-upload-form");
            const imageContainer = container.find(".image-container");
  
            if (file) {
              const reader = new FileReader();
  
              reader.onload = function (e) {
                preview.attr("src", e.target.result);
                form.hide();
                imageContainer.show();
              };
  
              reader.readAsDataURL(file);
            }
          });
  
          $(".remove-image").click(function () {
            const container = $(this).closest(".custom-file-upload");
            const input = container.find(".input-file");
            const preview = container.find(".preview-image");
            const form = container.find(".img-upload-form");
            const imageContainer = container.find(".image-container");
  
            input.val("");
            preview.attr("src", "");
            imageContainer.hide();
            form.show();
          });
        });
      </script>
</body>
</html>
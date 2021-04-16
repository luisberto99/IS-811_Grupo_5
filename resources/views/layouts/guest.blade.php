<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!--    CARROUSEL  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>

        <style>
            .sync .item {
                margin: 5px;
                height: 100%;
                }
                .owl-theme .owl-nav {
                /*default owl-theme theme reset .disabled:hover links */
                }
                .owl-theme .owl-nav [class*='owl-'] {
                transition: all 0.3s ease;
                }
                .owl-theme .owl-nav [class*='owl-'].disabled:hover {
                background-color: #D6D6D6;
                }
                .owl-theme {
                position: relative;
                }
                .owl-theme .owl-next,
                .owl-theme .owl-prev {
                width: 22px;
                height: 40px;
                margin-top: -20px;
                position: absolute;
                top: 50%;
                }
                .owl-theme .owl-prev {
                left: 10px;
                }
                .owl-theme .owl-next {
                right: 10px;
                }

        </style>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>

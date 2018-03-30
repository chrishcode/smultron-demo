<!doctype html>
<html class="overflow-y-scroll h-full" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Smultron - Skapa en hemsida för ditt event på bara några sekunder.</title>

        <!-- Tailwind css framework -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            .font-sans {
                font-family: 'Poppins', sans-serif;
            }
            .py-50px {
                padding-top: 50px;
                padding-bottom: 50px;
            }
            button:focus {
                outline:0;
            }
            .hover-slide-up:hover {
                margin-top: 20px;
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -ms-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                transition: all 200ms linear;
            }
            .hover-slide-up {
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -ms-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                transition: all 200ms linear;
            }
            header div .hover-slide-up:hover {
                margin-top: -15px;
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -ms-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                transition: all 200ms linear;
            }
            header div .hover-slide-up {
                -webkit-transition: all 200ms linear;
                -moz-transition: all 200ms linear;
                -ms-transition: all 200ms linear;
                -o-transition: all 200ms linear;
                transition: all 200ms linear;
            }
        </style>

        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" async></script>
    </head>
    <body class="bg-white font-sans antialiased h-full text-white">
        <div id="app" class="h-full">
            <header class="fixed pin-t w-full">
                <div class="container mx-auto px-4 py-50px flex items-center justify-between">
                    <a href="/" class="flex items-center text-white no-underline hover-slide-up">
                        <img class="w-6" src="{!! asset('storage/logo.png'); !!}" alt="logo" />
                        <span class="text-base tracking-tight font-bold ml-2">
                            smultron
                        </span>
                    </a>
                    <div class="flex items-center">
                        <a class="bg-transparant border-2 border-white py-2 px-4 rounded-full text-sm font-bold leading-normal text-white no-underline ml-8 uppercase" href="#">Demo</a>
                    </div>
                </div>
            </header>

            <section class="bg-pink-dark h-full py-8">
                <div class="container mx-auto h-full px-4">

                    <div class="flex items-center justify-start h-full">

                        <create-site></create-site>

                    </div>

                </div>
            </section>
        </div>
    </body>
</html>

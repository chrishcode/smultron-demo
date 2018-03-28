<!doctype html>
<html class="overflow-y-scroll h-full" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        </style>
    </head>
    <body class="bg-pink-dark font-sans antialiased h-full text-white">
        <header class="absolute pin-t w-full">
            <div class="container mx-auto px-4 py-50px flex items-center justify-between">
                <a href="/" class="flex items-center text-white no-underline">
                    <img class="w-6" src="{!! asset('storage/logo.png'); !!}" alt="logo" />
                    <span class="text-base tracking-tight font-bold ml-2">
                        smultron
                    </span>
                </a>
                <div class="flex items-center">
                    <a class="bg-white py-2 px-4 rounded-full text-sm font-bold leading-normal text-pink-dark no-underline ml-8 uppercase" href="#">Beta</a>
                </div>
            </div>
        </header>

        <section class="bg-pink-dark h-full py-8">
            <div class="container mx-auto h-full px-4">

                <div class="flex items-center justify-start h-full">

                    <div>
                        <h1 class="text-4xl xl:text-5xl lg:text-5xl md:text-5xl font-bold leading-tight tracking-tight mb-8">Skapa en hemsida för ditt event på bara några sekunder.</h1>
                        <p class="w-full xl:w-1/2 lg:w-1/2 md:w-1/2 text-base font-medium leading-normal mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie justo lacus, a bibendum felis scelerisque sit amet. Morbi vitae nunc varius, faucibus leo quis, gravida risus.</p>
                        
                        <div class="flex flex-row sm:flex-row justify-start pt-8">
                            <button class="mt-8 bg-white text-sm leading-none text-pink-dark font-bold uppercase h-16 px-8 rounded-full whitespace-no-wrap mb-2 sm:mb-0 sm:mr-2">
                                Skapa en hemida för ditt event
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </body>
</html>

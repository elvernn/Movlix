<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
            content="ie=edge">
        <title>Movlix</title>
        @livewireStyles

        <link rel="stylesheet"
            href="{{ mix('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer></script>

    </head>

    <body class="font-sans bg-gray-900 text-white ">
        <header class="border-b border-gray-800">
            <div class="">
                <nav class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
                    <ul class="flex flex-col md:flex-row items-center">
                        <li>
                            <a href="{{ route('home') }}">
                                <svg width="200" height="80" xmlns="http://www.w3.org/2000/svg">
                                    <!-- Logo -->
                                    <image href="{{ asset('logo.png') }}" x="10" y="10" width="60" height="60" />
                                  
                                    <!-- Text -->
                                    <text x="70" y="58" font-family="Arial" font-size="14" fill="#fff">Movlix</text>
                                  </svg>
                                  
                                  
                                  
                                  
                            </a>
                        </li>
                        <li class="md:ml-16 mt-3 md:mt-0 hover:text-gray-300"><a href="{{ route('home') }}">Movies</a>
                        </li>
                        <li class=" md:ml-16 mt-3 md:mt-0 hover:text-gray-300"><a href="#">TV Shows</a></li>
                        <li class="md:ml-16 mt-3 md:mt-0 hover:text-gray-300"><a href="{{ route('actors') }}">Actors</a>
                        </li>
                    </ul>
                    <ul class="flex flex-col md:flex-row items-center">
                        <livewire:search-dropdown></livewire:search-dropdown>
                        <li class="mt-2">
                            <a href="">
                                <img class="rounded-full w-8 h-8 ml-4"
                                    src="{{ asset('logo.png') }}"
                                    alt="User Avatar">
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

        </header>
        <section>
            @yield('content')
        </section>

        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
        @yield('js')
    </body>

</html>

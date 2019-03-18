<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- Fonts -->
        <link href="{{ asset('css/orchestra.css') }}" rel="stylesheet">
    </head>
    <body class="bg-concrete font-sans">
        <div class="flex">
            <!-- sidebar -->
            <div class="w-1/6 flex-no-shrink h-screen min-h-screen bg-blue-zodiac text-white">
                <div class="px-2 py-10 bg-cloud-burst text-center font-semibold shadow-inner">
                    Orchestra Platform
                </div>

                <!-- nav -->
                <nav class="mt-5 text-xs opacity-75">
                    <ul class="list-reset text-aqua-haze">
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent cursor-pointer border-east-side bg-cloud-burst">
                            <a class="text-aqua-haze no-underline hover:opacity-100" href="#">
                                <svg class="fill-current w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/></svg> <span class="pl-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent cursor-pointer hover:border-east-side hover:bg-cloud-burst">
                            <a class="text-aqua-haze no-underline hover:opacity-100" href="#">
                                <svg class="fill-current w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15 3H7a7 7 0 1 0 0 14h8v-2H7A5 5 0 0 1 7 5h8a3 3 0 0 1 0 6H7a1 1 0 0 1 0-2h8V7H7a3 3 0 1 0 0 6h8a5 5 0 0 0 0-10z"/></svg> <span class="pl-2">Extensions</span>
                            </a>
                            <ul class="list-reset">
                                <li>
                                    <a class="text-aqua-haze no-underline hover:opacity-100" href="#">Controls</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent cursor-pointer hover:border-east-side hover:bg-cloud-burst">
                            <a class="text-aqua-haze no-underline hover:opacity-100" href="#">
                                <svg class="fill-current w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
                                <span class="pl-2">Users</span>
                            </a>
                        </li>
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent cursor-pointer hover:border-east-side hover:bg-cloud-burst">
                            <a class="text-aqua-haze no-underline hover:opacity-100" href="#">
                                <svg class="fill-current w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 8V6a6 6 0 1 1 12 0h-3v2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/></svg>
                                <span class="pl-2">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->

            <div class="w-full">
                <!-- header -->
                <div class="flex justify-between items-center px-6 py-2 bg-white text-blue-zodiac shadow">
                    <div class="w-1/3">
                        <input class="w-full px-2 py-2 appearance-none bg-grey-lighter border-2 border-transparent focus:outline-none focus:bg-white focus:border-blue-zodiac focus:text-blue-zodiac rounded" placeholder="Search..." >
                    </div>
                    <div>
                        <img class="inline-block w-10 h-10 rounded-full" src="https://avatars0.githubusercontent.com/u/172966?s=460&v=4" alt="">
                    </div>
                </div>
                <!-- end header -->

                <div>
                    <div>main content</div>
                </div>
            </div>
        </div>
    </body>
</html>

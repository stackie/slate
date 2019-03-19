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
            <div class="flex-no-shrink h-screen min-h-screen bg-blue-zodiac text-white overflow-hidden">
                <div class="px-10 py-10 bg-cloud-burst text-center font-semibold shadow-inner">
                    <div class="">
                        Orchestra Platform
                    </div>
                </div>

                <!-- nav -->
                <nav class="mt-5 text-xs">
                    <ul class="list-reset text-aqua-haze">
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent cursor-pointer border-east-side bg-cloud-burst opacity-100">
                            <a class="text-aqua-haze no-underline" href="#Dashboard">
                                <i class="fas fa-home"></i> <span class="pl-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="group mb-1 px-6 py-3 border-l-4 border-transparent hover:border-east-side opacity-75 hover:opacity-100 hover:bg-cloud-burst cursor-pointer">
                            <a class="text-aqua-haze no-underline" href="#Extensions">
                                <i class="fas fa-cubes"></i> <span class="pl-2">Extensions</span> <i class="float-right fas fa-angle-down"></i>
                            </a>
                            <ul class="list-reset hidden group-hover:block">
                                <li>
                                    <a class="text-aqua-haze no-underline hover:opacity-100" href="#Controls">Controls</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent hover:border-east-side opacity-75 hover:opacity-100 hover:bg-cloud-burst cursor-pointer">
                            <a class="text-aqua-haze no-underline hover:opacity-100" href="#Users">
                                <i class="fas fa-users"></i> <span class="pl-2">Users</span>
                            </a>
                        </li>
                        <li class="mb-1 pl-2 py-3 border-l-4 border-transparent opacity-50 text-xs uppercase">Manage</li>
                        <li class="mb-1 pl-6 py-3 border-l-4 border-transparent hover:border-east-side opacity-75 hover:opacity-100 hover:bg-cloud-burst cursor-pointer">
                            <a class="text-aqua-haze no-underline hover:opacity-100" href="#Settings">
                                <i class="fas fa-cogs"></i>  <span class="pl-2">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- end sidebar -->

            <div class="w-full">
                <!-- header -->
                <div class="flex justify-between items-center px-6 py-2 bg-white text-blue-zodiac shadow">
                    <div class="w-1/2">
                        <input class="w-full px-2 py-2 appearance-none bg-grey-lighter border-2 border-transparent focus:outline-none focus:bg-white focus:border-blue-light focus:text-black rounded" placeholder="Search..." >
                    </div>
                    <div class="w-1/2 flex justify-end items-center">
                        <div>
                           <!-- notification -->
                        </div>
                        <div>
                            <img class="inline-block w-10 h-10 rounded-full" src="https://avatars0.githubusercontent.com/u/172966?s=460&v=4" alt="">
                        </div>
                    </div>
                </div>
                <!-- end header -->

                <div class="flex flex-wrap mx-4 my-4">
                    <div class="w-full m-2">
                        <div class="p-8 bg-white rounded shadow">main content</div>
                    </div>

                    <div class="w-1/4">
                        <div class="m-2 p-8 bg-white rounded shadow">main content</div>
                    </div>

                    <div class="w-1/4">
                        <div class="m-2 p-8 bg-white rounded shadow">main content</div>
                    </div>

                    <div class="w-1/4">
                        <div class="m-2 p-8 bg-white rounded shadow">main content</div>
                    </div>

                    <div class="w-1/4">
                        <div class="m-2 p-8 bg-white rounded shadow">main content</div>
                    </div>

                    <div class="w-3/4 mx-auto">
                        <div class="my-2 p-8 bg-white rounded shadow">main content</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

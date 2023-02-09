@props([
    'title' => '',
    'page' => '',
    'iconClass' => '',
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')


    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <style>
        li {
            list-style: none;
            margin: 20px 0 20px 0;
        }

        a {
            text-decoration: none;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
        }

        .active-main-content {
            margin-left: 250px;
        }

        .active-sidebar {
            margin-left: 0;
        }

        #main-content {
            transition: 0.4s;
        }

        .nav-bot {
            width: 250px;
            transition: 0.4s;
        }
    </style>
</head>

<body>

    <div>
        <div class="sidebar p-4" id="sidebar">
            <h4 class="mb-5 text-white">My Web</h4>
            <li>
                <a class="text-zinc-400" href="{{ route('admin.home') }}">
                    <i class="fa-solid fa-house mr-2 mb-1"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a class="text-zinc-400" href="{{ route('admin.product.index') }}">
                    <i class="fa-solid fa-box mr-2 mb-1"></i>
                    Product
                </a>
            </li>


            <li>
                <a class="text-zinc-400" href="{{ route('admin.MySkill.index') }}">
                    <i class="fa-solid fa-person mr-2 mb-1"></i>
                    My Skills
                </a>
            </li>

            <li>
                <a class="text-zinc-400" href="{{ route('admin.product.index') }}">
                    <i class="fa-solid fa-list mr-2 mb-1"></i>
                    Project
                </a>
            </li>

            <li>
                <a class="text-zinc-400" href="{{ route('admin.product.index') }}">
                    <i class="fa-solid fa-briefcase mr-2 mb-1"></i>
                    My Work
                </a>
            </li>
        </div>
    </div>
    <div class="" id="main-content">
        <div class="mb-4">
            <x-dashboard.header page="{{ $page }}" />
        </div>
        <button class="btn btn-dark m-3" id="button-toggle">
            <i class="bi bi-list"></i>
        </button>


        <div class="card grid h-100 md:h-56 rounded-lg mt-3 shadow  bg-body rounded border border-0 m-3">
            <div class="card-body ">
                {{ $slot }}
            </div>
        </div>
    </div>


    <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {

            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");


            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
        });
    </script>



</body>


</html>
{{--

<body class="bg-gray-50">


</body> --}}

@props([])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

<body class="bg-gray-50">
    <div>
        <div class="sidebar p-4" id="sidebar">
            <h4 class="mb-5 text-white">My Web</h4>

            <li>
                <a class="text-white" href="{{ route('admin.home') }}">
                    <i class="bi bi-house mr-2"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a class="text-white" href="{{ route('admin.product.index') }}">
                    <i class="bi bi-box2-fill mr-2"></i>
                    Product
                </a>
            </li>




        </div>
        </li>
    </div>
    </div>
    <div class="p-8" id="main-content">
        <div class="relative h-10 w-15 mb-5">
            <div class="absolute left-0 top-0 h-16 w-16">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.profile.index') }}"
                            onclick="document.ge
                            ('prfile')">
                            <i class="bi bi-person-circle mr-2"></i>
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-left mr-2"></i>
                            {{ __('Logout') }}
                        </a>

                <li class="dropdown-menu" id="profile">
                    <i class="bi bi-person-circle"></i>
                    <a href="{{ route('admin.profile.index') }}" class="nav-link">Profile</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        </li>
        <button class="btn btn-dark" id="button-toggle">
            <i class="bi bi-list"></i>
        </button>


        <div class="card  mt-3 shadow  bg-body rounded border border-0">
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

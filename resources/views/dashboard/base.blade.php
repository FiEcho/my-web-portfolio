@props([
    'title' => '',
    'page' => '',
    'iconClass' => '',
    'subpage' => '',
    'mainClass1' => '',
    'mainClass2' => '',
])


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $brand }}{{ $title }}</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')


    @include('sweetalert::alert')

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/style/sidebar.css') }}">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details ms-5 my-4">
            <a href="">
                <i class="fa-solid fa-square-parking icon"></i>
                <img src="{{ asset('assets/image/Logo.png') }}" class="w-32" alt="" srcset="">
            </a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fa-solid fa-house mr-2 mb-1"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="">
                        <i class="fa-solid fa-box mr-2 mb-1"></i>
                        <span class="link_name">Product</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu ">
                    <li><a class="link_name" href="">Product</a></li>
                    <li><a href="">Product Category</a></li>
                    <li><a href="{{ route('admin.product.index') }}">Products</a></li>
                </ul>
            <li>
                <div class="icon-link">
                    <a href="{{ route('admin.MySkill.index') }}">
                        <i class="fa-solid fa-person mr-2 mb-1"></i>
                        <span class="link_name">My Skills</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="icon-link">
                    <a class="text-zinc-400" href="{{ route('admin.product.index') }}">
                        <i class="fa-solid fa-list mr-2 mb-1"></i>
                        <span class="link_name">Project</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <div class="mb-4">
                <x-dashboard.header page="{{ $page }}" subpage="{{ $subpage }}">
                    <i class='bx bx-menu text-black ms-2'></i>
                </x-dashboard.header>
            </div>
            <div class="{{ $mainClass1 }}">
                <div class="{{ $mainClass2 }}">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow")

        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                console.log(arrowParent)
                arrowParent.classList.toggle("showMenu")
            })
        }

        let sidebar = document.querySelector(".sidebar")
        let sidebarBtn = document.querySelector(".bx-menu")
        console.log(sidebarBtn)
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close")
        })
    </script>
</body>

</html>

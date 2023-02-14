@props([
    'page' => '',
    'subpage' => '',
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>

<style>
    .text-none {
        text-decoration: none;
    }
</style>

<body>
    <header>
        <!-- ====== Navbar Section Start -->
        <header x-data="{
            navbarOpen: false
        }"
            class="flex w-full h-20 items-center bg-white drop-shadow-sm container-fluid  shadow  ">
            <div class="container mx-auto">
                <div class="relative -mx-4 flex items-center justify-between">
                    <div class="w-60 max-w-full px-4">
                        <a href="javascript:void(0)" class="block w-full pt-2 text-black  text-lg font-semibold">
                            {{ $page }}
                        </a>
                        <a href="{{ route('admin.home') }}" class="block text-none w-96 pt-1 text-gray-600 text-sm">
                            {{ $subpage }}
                        </a>
                    </div>
                    <div class="flex w-50  items-center justify-end px-4">
                        <div>
                            <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                                id="navbarToggler"
                                class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                                <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                                <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                                <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                            </button>

                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-black text-lg font-bold"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.profile.index') }}"
                                        onclick="document.ge
                                                    ('prfile')">
                                        <i class="fa-solid fa-circle-user mr-2"></i>
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
        </header>
        <!-- ====== Navbar Section End -->
</body>

</html>

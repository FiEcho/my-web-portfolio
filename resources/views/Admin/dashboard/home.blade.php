<x-admin.base title="" page="Dashboard" subpage="Dashboard" mainClass1="p-5">
    <div class="mb-5">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div>
            {{ __('You are logged in!') }}
        </div>
    </div>
    <div class="grid  grid-rows-4 md:grid-cols-4 gap-4 ">
        <div class="flex items-center justify-center h-24 card bg-green-200 dark:bg-gray-800 border-none ">
            <a class=" text-2xl text-green-800 dark:text-gray-500" href="{{ route('admin.product.index') }}">
                <i class="fa-solid fa-box mr-2 mb-1"></i>
                Product
            </a>
        </div>
        <div class="flex items-center justify-center h-24 card bg-gray-300 dark:bg-gray-800 border-none">
            <a class="text-2xl text-gray-800 dark:text-gray-500" href="{{ route('admin.MySkill.index') }}">
                <i class="fa-solid fa-person mr-2 mb-1"></i>
                My Skills
            </a>
        </div>
        <div class="flex items-center justify-center h-24 card bg-gray-300 dark:bg-gray-800 border-none">
            <a class="text-2xl text-gray-800 dark:text-gray-500" href="{{ route('admin.product.index') }}">
                <i class="fa-solid fa-list mr-2 mb-1"></i>
                Project
            </a>
        </div>
        <div class="flex items-center justify-center h-24 card bg-gray-300 dark:bg-gray-800 border-none">
            <a class="text-2xl text-gray-800 dark:text-gray-500" href="{{ route('admin.product.index') }}">
                <i class="fa-solid fa-briefcase mr-2 mb-1"></i>
                My Work
            </a>
        </div>
    </div>

    </x-SlideNav>

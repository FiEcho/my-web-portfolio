<x-admin.base title="My Web" page="Dashboard">
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
    <div class="grid grid-flow-col gap-4">
        <div class="flex items-center justify-center h-24 card bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500"></p>
        </div>
        <div class="flex items-center justify-center h-24 card bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500"></p>
        </div>
        <div class="flex items-center justify-center h-24 card bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500"></p>
        </div>
    </div>

    </x-SlideNav>
    {{--
@section('content')
    <div class="container">

    </div>
@endsection --}}

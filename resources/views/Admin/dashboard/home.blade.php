<x-SlideNav>
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ __('Dashboard') }}


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div>
                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</x-SlideNav>
{{--
@section('content')
    <div class="container">

    </div>
@endsection --}}

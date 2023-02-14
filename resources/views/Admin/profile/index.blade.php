<x-admin.base title=" | Profile" page="Profile" subpage="Dashboard / Profile"
    mainClass1="card shadow m-5 border-none p-3" mainClass="card-body">
    @include('sweetalert::alert')
    <div class="container p-5">
        <div class="text-xl mb-8">
            {{ Auth::user()->name }}
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('Admin.profile.form')
        </form>
    </div>
</x-admin.base>

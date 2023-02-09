<x-admin.base title="My Web | Profile" page="Profile">
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

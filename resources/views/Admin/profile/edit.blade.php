<x-admin.base title="My Web | Profile" page="Profile">
    <div class="container">
        <h3 class="mb-3 ml-2 font-bold text-2xl ">Edit Profile</h3>
        <form action="{{ route('admin.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('Admin.profile.form-edit')
        </form>
    </div>
</x-admin.base>

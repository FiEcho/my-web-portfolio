<x-admin.base title="My Web | Profile" page="Profile">
    <div class="container">
        <div class="text-xl mb-8">
            {{ Auth::user()->name }}
        </div>
        <form action="">
            <x-admin.formProfile />
        </form>
    </div>
</x-admin.base>

<x-admin.base title="Product | Create" page="Product | Create">
    <div class="card-body ">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h3>Tambah Produk</h3>
            @include('layouts.form-create')

        </form>
</x-admin.base>

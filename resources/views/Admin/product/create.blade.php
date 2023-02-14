<x-admin.base title=" | Product | Create" page="Add Product" subpage="Dashboard / Product / Create Product"
    mainClass1="card shadow m-5 border-none p-3" mainClass="card-body">
    @include('sweetalert::alert')
    <div class="card-body ">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h3>Tambah Produk</h3>
            @include('layouts.form-create')

        </form>
</x-admin.base>

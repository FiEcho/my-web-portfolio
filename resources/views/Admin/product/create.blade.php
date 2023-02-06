<x-SlideNav>
    <div class="card-body ">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h3>Tambah Produk</h3>
            <x-form-component />

        </form>
</x-SlideNav>

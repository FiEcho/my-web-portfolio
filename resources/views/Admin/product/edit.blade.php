<x-admin.base title="Product | Edit" page="Product | Edit">
    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>Edit Data</h3>
        <x-form-component>
            <div class="mb-1">
                <h5>Gambar Sebelumya</h5>

                <img src="{{ asset('storage/' . $product->gambar) }}" width="100px"alt="" srcset="">
            </div>
        </x-form-component>

    </form>
</x-admin.base>

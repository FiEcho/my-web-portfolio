<x-admin.base title="Product | Edit" page="Product | Edit">
    <h3 class="mb-3 ml-2 font-bold text-2xl ">Edit Data</h3>
    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('layouts.form-component')
    </form>
</x-admin.base>

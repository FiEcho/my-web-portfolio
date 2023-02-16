<x-Base title=" | Product | Edit" page="Edit Product" subpage="Dashboard / Product / Edit Product"
    mainClass1="card shadow m-5 border-none p-3" mainClass="card-body">
    <h3 class="mb-3 ml-2 font-bold text-2xl ">Edit Data</h3>
    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('layouts.form-component')
    </form>
</x-Base>

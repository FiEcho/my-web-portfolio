@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded border border-0">
            <div class="card-body ">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <h3>Tambah Produk</h3>
                    <x-form-component />

                </form>
            </div>
        </div>
    </div>
@endsection

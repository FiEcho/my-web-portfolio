@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded border border-0">
            <div class="card-body ">
                <x-card-button ButtonClass="btn btn-primary m-2 mb-5" type="submit" text="Tambah" Name="button"
                    url="{{ route('admin.product.create') }}" />
                <div class="table table-resposive ">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($product as $p)
                                <tr>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->deskripsi }}</td>
                                    <td>{{ number_format($p->harga, 2, ',', '.') }}</td>
                                    <td><img src="{{ asset('storage/' . $p->gambar) }}" alt="" width="100px"></td>
                                    <td class="d-flex">
                                        <x-card-button button-type="submit" button-class="btn btn-warning m-1"
                                            name="edit" id="edit" text="edit"
                                            url="{{ route('admin.product.edit', $p->id) }}" />
                                        <form action="{{ route('admin.product.destroy', $p->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-card-button button-type="submit" button-class="btn btn-danger m-1"
                                                name="delete" id="delete" text="delete" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

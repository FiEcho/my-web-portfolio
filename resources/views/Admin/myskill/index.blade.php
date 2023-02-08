<x-admin.base title="My Web | Skills" page="My Skills">
    <div class="grid grid-cols-1 gap-1 mb-4 p-5">
        <x-card-button ButtonClass="btn btn-primary m-2 mb-5 w-32" type="submit" text="Tambah" Name="button"
            url="{{ route('admin.MySkill.create') }}">
            <h3 class="mb-3 ml-2 font-bold text-2xl ">
                Tambah Skill
            </h3>
            <div class="table table-resposive table-sm">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td>{{ number_format($p->harga, 2, ',', '.') }}</td>
                                <td><img src="{{ asset('storage/' . $p->gambar) }}" alt="" width="100px">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <x-card-button button-type="submit"
                                            button-class="inline-block px-6 py-1 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out"
                                            name="edit" id="edit"
                                            url="{{ route('admin.product.edit', $p->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </x-card-button>
                                        <form action="{{ route('admin.product.destroy', $p->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-card-button button-type="submit"
                                                button-class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out1 ml-2"
                                                name="delete" id="delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </x-card-button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


</x-admin.base>

<div>
    <x-input forLabel="NamaProduk" label-class="form-label" label-text="Nama Produk" input-class="form-control mb-2"
        placeholder="" input-type="text" name="nama" id="nama" />
    @error('nama')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
    <x-textarea forLabel="Deskripsi" label-class="form-label" label-text="Deskripsi" name="deskripsi" id="deskripsi"
        cols="5" rows="5" textarea-class="form-control" text="{{ old('deskripsi') }}" />
    @error('deskripsi')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror

    <x-input forLabel="Harga" label-class="form-label" label-text="Harga" input-class="form-control mb-2"
        value="{{ old('harga') }}" input-type="number" name="harga" id="harga" />
    @error('harga')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror

    {{ $slot }}

    <x-input forLabel="Gambar" label-class="form-label" label-text="Gambar"
        input-class="form-control mb-2 form-control-sm" placeholder="Masukkan Gambar" input-type="file" name="gambar"
        id="gambar" />
    @error('gambar')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror

    <x-card-button button-type="submit"
        button-class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out "
        name="submit" id="submit" text="Simpan" />
    <x-card-a
        url-class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
        url-id="kembali" url-name="kembali" url="{{ route('admin.product.index') }}" />
</div>

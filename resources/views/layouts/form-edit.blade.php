<div>
    <x-input forLabel="NamaProduk" label-class="form-label" label-text="Nama Produk" input-class="form-control mb-2"
        placeholder="{{ $product->nama }}" input-type="text" name="nama" id="nama" />
    @error('nama')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror
    <x-textarea forLabel="Deskripsi" label-class="form-label" label-text="Deskripsi" name="deskripsi" id="deskripsi"
        cols="5" rows="5" textarea-class="form-control" />
    @error('deskripsi')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
    @enderror

    <x-input forLabel="Harga" label-class="form-label" label-text="Harga" input-class="form-control mb-2"
        placeholder="Masukkan Harga" input-type="number" name="harga" id="harga" />
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

    <x-card-button button-type="submit" button-class="btn btn-primary" name="submit" id="submit" text="Simpan" />
</div>

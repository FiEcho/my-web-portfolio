<x-input for-label="nama" label-class="form-label" label-text="Nama Product" input-type="name" id="name"
    input-class="form-control" :value="{{ old('nama', $product ?? null) }}" />


{{ $slot }}

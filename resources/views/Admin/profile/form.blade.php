<x-input for-label="nama" label-text="Nama" input-type="name" name="name" id="name" input-class="form-control mb-2"
    value="{{ old('name') }}" />

<x-input for-label="email" label-text="Email" input-type="email" name="email" id="email" input-class="form-control mb-2"
    value="{{ old('email') }}" />

<x-textarea for-label="alamat" label-class="form-label" label-text="Alamat" name="alamat" id="alamat" cols="5" rows="5"
    textarea-class="form-control mb-2" text="{{ old('alamat') }}" />

<x-input for-label="no_hp" label-text="No Hp" input-type="number" name="no_hp" id="no_hp"
    input-class="form-control mb-2" value="{{ old('no_hp') }}" />

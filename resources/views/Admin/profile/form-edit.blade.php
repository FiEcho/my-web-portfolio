<x-input for-label="nama" label-text="Nama" input-type="name" name="name" id="name" input-class="form-control mb-2"
    value="{{ old('name', $user->name) }}" />
@error('name')
    <div class="alert alert-danger mt-2">{{ $message }}</div>
@enderror

<x-input for-label="email" label-text="Email" input-type="email" name="email" id="email" input-class="form-control mb-2"
    value="{{ old('email', $user->email) }}" />
@error('email')
    <div class="alert alert-danger mt-2">{{ $message }}</div>
@enderror

<x-textarea for-label="alamat" label-class="form-label" label-text="Alamat" name="alamat" id="alamat" cols="5"
    rows="5" textarea-class="form-control mb-2" text="{{ old('alamat', $user->alamat) }}" />
@error('alamat')
    <div class="alert alert-danger mt-2">{{ $message }}</div>
@enderror

<x-input for-label="no_hp" label-text="No Hp" input-type="number" name="no_hp" id="no_hp"
    input-class="form-control mb-2" value="{{ old('no_hp', $user->no_hp) }}" />
@error('no_hp')
    <div class="alert alert-danger mt-2">{{ $message }}</div>
@enderror


<x-card-button button-type="submit"
    button-class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out "
    name="submit" id="submit" text="Simpan" />

<x-card-button button-type="reset"
    button-class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out "
    name="reset" id="reset" text="Reset" />

<x-card-a
    url-class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
    url-id="kembali" url-name="kembali" url="{{ route('admin.profile.index') }}" />

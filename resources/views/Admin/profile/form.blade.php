@foreach ($user as $u)
    <x-input for-label="nama" label-text="Nama" input-type="name" name="name" id="name" input-class="form-control mb-2"
        value="{{ old('name', $u->name) }}" disabled />

    <x-input for-label="email" label-text="Email" input-type="email" name="email" id="email"
        input-class="form-control mb-2" value="{{ old('email', $u->email) }}" disabled />

    <x-textarea for-label="alamat" label-class="form-label" label-text="Alamat" name="alamat" id="alamat" cols="5"
        rows="5" textarea-class="form-control mb-2" text="{{ old('alamat', $u->alamat) }}" disabled />

    <x-input for-label="no_hp" label-text="No Hp" input-type="number" name="no_hp" id="no_hp"
        input-class="form-control mb-2" value="{{ old('no_hp', $u->no_hp) }}" disabled />



    <x-card-a url="{{ route('admin.profile.edit', $u->id) }}"
        url-class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out "
        url-name="edit" />

    <x-card-button button-type="reset"
        button-class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out "
        name="reset" id="reset" text="Reset" />
@endforeach

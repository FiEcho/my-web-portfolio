<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'alamat' => ['required','string' ],
            'no_hp' => ['required','min:10'],
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'Kolom nama harus di isi',
            'name.max' => 'Tidak boleh lebih dari 255 huruf',
            'email.required' => 'Kolom email harus di isi',
            'email.max' => 'Tidak boleh lebih dari 255 huruf',
            'email.email' => 'Harap menambahkan @gmail.com',
            'password.required' => 'Kolom password harus di isi',
            'password.min' => 'Harap lebih dari 8 huruf atau angka',
            'alamat.required' => 'Kolom alamat harus di isi',
            'no_hp.required' => 'Isi Nomor Telepon anda',
            'no_hp.requried' => 'Nomor Telepon minimal 10 angka',
        ];
    }
}
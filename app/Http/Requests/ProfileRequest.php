<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|min:1|max:50',
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'Kolom Nama Harus di isi',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter',
            'email.required' => 'Kolom Email Harus di isi',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter',
            'alamat.required' => 'Kolom Alamat Harus di isi',
            'no_hp.required' => 'Kolom Nomor Hp Harus di isi',
            'no_hp.min' => 'Nomor Hp minimal lebih dari satu angka',
            'no_hp.max' => 'Nomor HP tidak boleh lebih dari 255 karakter',
        ];
    }
}
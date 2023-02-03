<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga'=> 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages() : array
    {
        return [
            'nama.required' => 'Kolom nama harus di isi',
            'deskripsi.required' => 'Kolom deskripsi harus di isi',
            'harga.required' => 'Kolom harga harus di isi',
            'gambar.required' => 'Kolom gambar harus di isi',
            'gambar.image' => 'Kolom gambar harus berupa gambar',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, gif, atau svg',
            'gambar.max' => 'Gambar maksimum yaitu 2MB',
        ];
    }
}
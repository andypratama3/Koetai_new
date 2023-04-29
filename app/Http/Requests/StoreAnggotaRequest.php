<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnggotaRequest extends FormRequest
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
    public function rules()
    {
        return [
            // Msalahnya disini..
            'nama' => 'required',
            // 'divisi'=>'required', // Di form name nya devisi
            'devisi' => 'required',
            'poto' => 'required',
            // 'slug' => 'required', // Slug itu ngisi otomatis, jangan dikasi required,
            // Ntar controllernya jadi nungguin ada input slug
            'ig' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Data Tidak Boleh Kosong!',
            'nama' => 'Nama Tidak Boleh Kosong!',
        ];
    }
}

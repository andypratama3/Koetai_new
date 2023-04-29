<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'nama' => 'required',
            'desc' => 'required',
            'gambar' => 'required',
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

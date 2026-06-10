<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required','string','max:255'],
            'jurusan_id' => ['required','exists:jurusans,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'jurusan_id.required' => 'Wajib pilih jurusan dulu, Min!',
            'nama.required' => 'Nama wajib diisi!',
            'jurusan_id.exists' => 'Jurusan yang dipilih tidak valid.',
        ];
    }
}

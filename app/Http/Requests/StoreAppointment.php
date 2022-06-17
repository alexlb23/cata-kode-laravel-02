<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'phone' => 'nullable|digits:10',
            'email' => 'required|email',
            'date' => 'required|date',
            'timezone' => 'nullable|string',
            'message' => 'nullable|string',
        ];
    }
}

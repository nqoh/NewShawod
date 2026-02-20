<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:3','string'],
            'surname' => ['required','min:3','string'],
            'phone' => ['required','min:14','string'],
            'email' => ['required','email','unique:users,email'],
            'package' => ['required','min:3','string'],
            'description' => ['required','min:30','string'],
            'features' => ['string','nullable'],
            'type' => ['required','string','min:6'],
            'price' => ['required','decimal:1,8'],
            'coupon_id' => ['nullable']
        ];
    }
}

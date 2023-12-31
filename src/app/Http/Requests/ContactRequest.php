<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', ''],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'numeric', 'digits:7'],
            'address' => ['required', 'string', 'max:255'],
            'building_name' => ['string', 'max:255'],
            'opinion' => ['required', 'max:120'],
        ];
    }
}

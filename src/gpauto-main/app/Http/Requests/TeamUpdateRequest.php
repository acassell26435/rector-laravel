<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamUpdateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'dob' => 'required|before:1995/01/01',
            'address' => 'required',
            'post' => 'required',
            'status' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg',
        ];
    }
}

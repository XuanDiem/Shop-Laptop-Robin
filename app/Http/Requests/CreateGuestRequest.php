<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGuestRequest extends FormRequest
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
            'name' => 'required|min:4|max:20',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',

        ];
    }

    public function messages()
    {
        return ['name.required' => 'Name không được để trống !',
            'name.min' => 'Name không được để dưới 4 ký tự !',
            'name.max' => 'Name không được để trên 20 ký tự !',
            'email.required' => 'Email không được để trống !',
            'email.email' => 'Email sai định dạng =>( Example : user123@gmail.com )!',
            'phone.required' => 'Phone không được để trống !',
            'address.required' => 'Address không được để trống !',
            'gender.required' => 'Gender không được để trống !',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'image' => 'required',
            'employee_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống !',
            'email.required' => 'Email không được để trống !',
            'phone.required' => 'Phone không được để trống !',
            'address.required' => 'Address không được để trống !',
            'gender.required' => 'Gender không được để trống !',
            'image.required' => 'Image không được để trống !',
            'employee_id.required'=> 'Id employee không được để trống !',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormQuestion extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'email' => 'required|min:5|max:250',
            'message' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return ['name.required' => 'nhập tên',
            'name.min' => 'Ký tự lớn hơn 5',
            'name.max' => 'Ký tự nhỏ hơn 30',
            'email.min' => 'Ký tự lớn hơn 5',
            'email.max' => 'Ký tự nhỏ hơn 250',
            'email.required' => 'email không được để trống',
            'message.required' => 'nhập điều bạn muốn về chúng tôi',
            'message.max' => 'Tối đa 255 ký tự'

        ];
    }
}

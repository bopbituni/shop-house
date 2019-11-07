<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormDetail extends FormRequest
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
            'date' => 'required|date',
            'time' => 'required',
            'phone' => 'required|min:9|max:11',
            'email' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return ['name.required' => 'nhập tên',
            'name.min' => 'Ký tự lớn hơn 5',
            'name.max' => 'Ký tự nhỏ hơn 30',
            'date.required' => 'không được để trống',
            'time.required' => 'không được để trống',
            'phone.required' => 'Nhập số điện thoại',
            'email.required' => 'Nhập email',
            'content.required' =>'nhập nội dung'
        ];
    }
}

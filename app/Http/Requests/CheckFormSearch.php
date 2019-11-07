<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormSearch extends FormRequest
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
            'status' => 'required|min:5|max:30',
            'type_id' => 'required',
            'fromPrice' => 'required',
            'toPrice' => 'required',
            'fromBedroom' => 'required',
            'toBedroom' => 'required',
            'fromBathroom' => 'required',
            'toBathroom' => 'required',
            'fromArea' => 'required',
            'toArea' => 'required'
        ];
    }

    public function messages()
    {
        return ['name.required' => 'nhập tên biệt thự',
            'name.min' => 'Ký tự lớn hơn 5',
            'name.max' => 'Ký tự nhỏ hơn 30',
            'status.required' => 'nhập trạng thái!',
            'status.min' => 'Lớn hơn 5 kí tự',
            'status.max' => 'Nhỏ hơn 30 kí tự!',
            'type_id.required' => 'nhập trạng loại biệt thự!',
            'fromPrice.required' => 'chọn giá!',
            'toPrice.required' => 'chọn giá !',
            'fromBedroom.required' => 'chọn số lượng phòng ngủ!',
            'toBedroom.required' => 'chọn số lượng phòng ngủ!',
            'fromBathroom.required' => 'chọn số lượng phòng tắm!',
            'toBathroom.required' => 'chọn số lượng phòng tắm!',
            'fromArea.required' => 'Chọn diện tích!',
            'toArea.required' => 'Chọn diện tích!',

        ];
    }
}

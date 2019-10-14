<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormRequest extends FormRequest
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
        return ['name.required' => 'Bạn cần nhập tên biệt thự bạn muốn tìm',
            'name.min' => 'Tên biệt thự phải lơn hơn 5 kí tự',
            'name.max' => 'Tên biệt thự phải nhỏ hơn 30 kí tự',
            'status.required' => 'Bạn cần nhập trạng thái!',
            'status.min' => 'Lớn hơn 5 kí tự',
            'status.max' => 'Nhỏ hơn 30 kí tự!',
            'type_id.required' => 'Bạn cần nhập trạng loại biệt thự!',
            'fromPrice.required' => 'Bạn cần chọn giá thấp nhất!',
            'toPrice.required' => 'Bạn cần chọn gia cao nhất !',
            'fromBedroom.required' => 'Bạn cần chọn số lượng phòng ngủ nhỏ nhất!',
            'toBedroom.required' => 'Bạn cần chọn số lượng phòng ngủ lớn nhất!',
            'fromBathroom.required' => 'Bạn cần chọn số lượng phòng tắm nhỏ nhất!',
            'to.required' => 'Bạn cần chọn số lượng phòng tắm lớn nhất!',
            'fromArea.required' => 'Chọn diện tích nhỏ nhất bạn muốn!',
            'toArea.required' => 'Chọn diện tích lớn nhất bạn muốn!',

        ];
    }
}

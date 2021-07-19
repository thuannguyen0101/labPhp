<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'startDate' => ['required','after:today'],
            'endDate' => ['required','after:startDate'],
            'eventName' => ['required','min:20'],
            'bandNames' => ['required'],
            'ticketPrice' => ['required','min:1'],
            'status' => ['required','min:0','max:3'],
            'portfolio' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'startDate.required' => 'vui lòng nhập ngày bắt đầu sự kiện',
            'startDate.after' => 'ngày bắt đầu phải sau ngày hiện tại',
            'endDate.required' => 'vui lòng nhập ngày kết thúc sự kiên',
            'endDate.after' => 'ngày kết thúc phải sau ngày bắt đầu',
            'eventName.required' =>'vui lòng nhập tên sự kiện',
            'eventName.min' =>'tên sự kiên tối thiểu 20 ký tự',
            'bandNames.required' =>'vui lòng nhập tên ban nhạc',
            'ticketPrice.required' =>'vui lòng nhập giá vé',
            'status.required' =>'vui lòng chọn trang thải cho sự kiên',
            'ticketPrice.min' =>'vui lòng nhập giá vé tối thiểu  1$',
            'status.min' =>'Trang thái tối thiểu là 0',
            'status.max' =>'Trang thái tối thiểu là 3',
            'portfolio.required' =>'vui lòng nhập danh mục đầu tư'
        ];
    }

}

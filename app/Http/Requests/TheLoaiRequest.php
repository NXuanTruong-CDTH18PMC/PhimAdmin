<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheLoaiRequest extends FormRequest
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
            'TenTL'=>'required|unique:TheLoai,TenTL|max:100|min:3'
        ];
    }
    public function messages() {
        return [
            'TenTL.unique'     => '<div><strong  style="color: red;"> đã tồn tại!</strong></div>',
            'TenTL.max'   => '<div><strong  style="color: red;"> vượt quá độ dài cho phép!</strong></div>',
            'TenTL.min'   => '<div><strong  style="color: red;"> ngắn hơns độ dài cho phép!</strong></div>'
        ];
    }
}

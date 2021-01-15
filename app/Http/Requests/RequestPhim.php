<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPhim extends FormRequest
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
           
          
           'TenPhim'=>'required|unique:Phim,TenPhim|max:100|min:3',
           'HinhAnh' => 'required'
          
            //
        ];
    }
    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'TenPhim.unique'     => '<div><strong  style="color: red;"> đã tồn tại!</strong></div>',
            'TenPhim.max'   => '<div><strong  style="color: red;"> vượt quá độ dài cho phép!</strong></div>',
            'TenPhim.min'   => '<div><strong  style="color: red;"> ngắn hơns độ dài cho phép!</strong></div>'
        ];
    }
}

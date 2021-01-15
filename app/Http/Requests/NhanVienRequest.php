<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanVienRequest extends FormRequest
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
           
            'TenNV'=>'required|unique:NhanVien,TenNV|max:100|min:3',
           
             //
         ];
     }
     public function messages() {
         return [
             'TenNV.unique'     => '<div><strong  style="color: red;"> đã tồn tại!</strong></div>',
             'TenNV.max'   => '<div><strong  style="color: red;"> vượt quá độ dài cho phép!</strong></div>',
             'TenNV.min'   => '<div><strong  style="color: red;"> ngắn hơns độ dài cho phép!</strong></div>'
         ];
     }
}

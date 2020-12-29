<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuatChieuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
<<<<<<< Updated upstream
        return true;
=======
        return false;
>>>>>>> Stashed changes
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
<<<<<<< Updated upstream
                'MaSC' => 'required'
        ];
    }
    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>'
=======
            //
>>>>>>> Stashed changes
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\GD;

class GDRequest extends Request
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
            'txtCV' => 'required|unique:congviec,TenCV'
        ];
    }

    public function messages()
    {
        return [
            'txtCV.required' => 'Vui lòng nhập tên công việc',
            'txtCV.unique' => 'Tên công việc đã tồn tại'
        ];
    }
}

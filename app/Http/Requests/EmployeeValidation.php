<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeValidation extends FormRequest
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
            'fullname' => 'required|string|',
            'employee_code' => 'required|max:6|unique:employees',
            'holidays' => 'required|numeric|max:2',
            'paymenttype'=> 'required|max:1|',
            'intime'=>'required|string',
            'outtime'=>'required|string',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}

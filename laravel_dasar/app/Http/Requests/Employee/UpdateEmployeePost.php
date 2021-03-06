<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseAdminRequest;

class UpdateEmployeePost extends BaseAdminRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'company_id'=>'required',
        ];
    }
}

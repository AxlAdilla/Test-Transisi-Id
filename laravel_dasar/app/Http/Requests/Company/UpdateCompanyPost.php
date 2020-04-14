<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseAdminRequest;

class UpdateCompanyPost extends BaseAdminRequest
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
            'logo'=>'max:2000|dimensions:min_width=100,min_height=100|mimes:png',
            'website'=>'required'
        ];
    }
}

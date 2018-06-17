<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
* Auth: quyet@webviet.vn
* Date: 26/05/2018
* Des : Validate Login Request
**/
class LoginRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $arrValidations = [
            'username' => 'required',
            'password' => 'required',
        ];
        
        return $arrValidations;
    }

    public function messages()
    {
        return [
            'username.required' => trans('app.require.project_name'),
            'password.required' => trans('app.require.company'),
        ];
    }
}

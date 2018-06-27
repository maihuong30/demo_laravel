<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
* Auth: quyet@webviet.vn
* Date: 26/05/2018
* Des : Validate Login Request
**/
class StoreRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $arrValidations = [
            'Name' => 'required',
            'Phone' => 'required',
            'Email'=>'required',
            'Address'=>'required',
        ];
        
        return $arrValidations;
    }

    public function messages()
    {
        return [
            'Name.required' => trans('Bạn chưa nhập Name'),
            'Phone.required' => trans('Bạn chưa nhập Phone'),
            'Email.required' => trans('Bạn chưa nhập Email'),
            'Address.required' => trans('Bạn chưa nhập Address'),
        ];
    }
}

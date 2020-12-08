<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tblAboutReq extends FormRequest
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

        $rules = [
             'form.txtAbout' => 'required'
           ,'form.txtVision' => 'required'
           ,'form.txtMission' => 'required'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
             'form.txtAbout.required' => 'Please insert about!'
            ,'form.txtVision.required' => 'Please insert vision!'
            ,'form.txtMission.required' => 'Please insert mission!'
        ];
    }
}

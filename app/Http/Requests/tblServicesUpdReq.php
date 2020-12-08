<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tblServicesUpdReq extends FormRequest
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
            '_txtFileUpd' => 'required',
            '_txtTitleUpd' => 'required',
            '_txtDescriptionUpd' => 'required',
            '_intPositionUpd' => 'required|numeric|min:0|max:100',
            '_txtImgPositionUpd' => 'required'
        ];
    }

    public function messages()
    {
        return [
            '_txtFileUpd.required' => 'Required to browse image file',
            '_txtTitleUpd.required' => 'Required to to indicate title',
            '_txtDescriptionUpd.required' => 'Required to fill services description',
            '_intPositionUpd.required' => 'Required to indicate the services position',
            '_intPositionUpd.min' => 'Services position value is not less than 0',
            '_intPositionUpd.max' => 'Services position value is not greater than 100',
            '_txtImgPositionUpd.required' => 'Required to indicate the services image position'
        ];
    }
}

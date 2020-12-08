<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tblServicesAddReq extends FormRequest
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
            '_txtFileAdd' => 'required',
            '_txtTitleAdd' => 'required',
            '_txtDescriptionAdd' => 'required',
            '_intPositionAdd' => 'required|numeric|min:0|max:100',
            '_txtImgPositionAdd' => 'required'
        ];
    }

    public function messages()
    {
        return [
            '_txtFileAdd.required' => 'Required to browse image file',
            '_txtTitleAdd.required' => 'Required to to indicate title',
            '_txtDescriptionAdd.required' => 'Required to fill services description',
            '_intPositionAdd.required' => 'Required to indicate the services position',
            '_intPositionAdd.min' => 'Services position value is not less than 0',
            '_intPositionAdd.max' => 'Services position value is not greater than 100',
            '_txtImgPositionAdd.required' => 'Required to indicate the services image position'
        ];
    }
}

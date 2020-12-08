<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tblMainSliderReqUpd extends FormRequest
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
            '_txtFileUpd' => 'required',
            '_txtDescriptionUpd' => 'required'
           ,'_intPositionUpd' => 'required|numeric|min:0|max:100'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
             '_txtFileUpd.required' => 'Required to browse image first'
            ,'_txtDescriptionUpd.required' => 'Required to indicate description'
            ,'_intPositionUpd.required' => 'Required to indicate the slider position value'
            ,'_intPositionUpd.min' => 'Position value is not less than 0'
            ,'_intPositionUpd.max' => 'Position value is not greater than 100'
        ];
    }
}

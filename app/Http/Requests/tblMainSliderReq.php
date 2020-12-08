<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tblMainSliderReq extends FormRequest
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
            '_txtFileAdd' => 'required'
            ,'_txtDescriptionAdd' => 'required'
            ,'_intPositionAdd' => 'required|numeric|min:0|max:100'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
             '_txtFileAdd.required' => 'Please browse image first'
            ,'_txtDescriptionAdd.required' => 'Please fill up description'
            ,'_intPositionAdd.required' => 'Please indicate the slider position'
            ,'_intPositionAdd.min' => 'Slider position value is not less than 0'
            ,'_intPositionAdd.max' => 'Slider position value is not greater than 100'
        ];
    }
}

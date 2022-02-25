<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required|min:2|max:40',
            'description' => 'required|max:200',
            'category' => 'required|min:2|max:40'
        ];
    }

    /**
     * Change specific attribute's traductions
     * 
     * @return [type]
     */
    // public function attributes()
    // {
        //
    // }

    /**
     * Add special messages to form validations
     * 
     * @return [type]
     */
    public function messages()
    {
        return [
            'name.required' => 'You need a description for that new course, champ ;)'
        ];
    }
}

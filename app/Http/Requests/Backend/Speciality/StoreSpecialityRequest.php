<?php

namespace App\Http\Requests\Backend\Speciality;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('store-speciality');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'           => 'required|max:191|unique:specialities',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter specialit name',
        ];
    }
}

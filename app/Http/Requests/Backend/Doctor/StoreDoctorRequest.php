<?php

namespace App\Http\Requests\Backend\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('store-doctor');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //Put your rules for the request in here
            //For Example : 'title' => 'required'
            //Further, see the documentation : https://laravel.com/docs/5.4/validation#creating-form-requests
            'first_name' => 'required|max:191|min:2',
            'last_name' => 'required|max:191|min:2',
            'email' => 'required|email|unique:doctors',
            'status' => 'required',
            'address' => 'required',
            'specialities' => 'required',
            'phone_number' => 'required|max:13',
        ];
    }

    public function messages()
    {
        return [
            //The Custom messages would go in here
            //For Example : 'title.required' => 'You need to fill in the title field.'
            //Further, see the documentation : https://laravel.com/docs/5.4/validation#customizing-the-error-messages
        ];
    }
}

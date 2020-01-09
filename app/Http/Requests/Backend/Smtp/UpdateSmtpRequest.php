<?php

namespace App\Http\Requests\Backend\Smtp;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSmtpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('update-smtp');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mail_driver' => 'required',
            'smtp_hostname' => 'required',
            'smtp_username' => 'required',
            'smtp_password' => 'required',
            'smtp_port' => 'required',
            'smtp_encryption' => 'required',
            'status' => 'required|boolean',
            'smtp_enabled' => 'required|boolean',
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

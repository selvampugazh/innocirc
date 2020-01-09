<?php

namespace App\Http\Requests\Backend\Seo;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('store-seo');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'locale' => 'required|exists:languages,language_code',
            'site_name'   => 'required|array|min:1',
            //'site_name.*' => 'required',
            //'email' => 'email',
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

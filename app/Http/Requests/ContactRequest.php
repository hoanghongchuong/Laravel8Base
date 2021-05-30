<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required|max:12|min:10',
            'name' => 'required|max:100',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'email.required' => trans('email_required'),
          'phone.required' => trans('phone_required'),
          'phone.max' => trans('phone_invalid'),
          'phone.min' => trans('phone_invalid'),
          'name.required' => trans('name_required'),
          'content.required' => trans('content_required'),
        ];
    }
}

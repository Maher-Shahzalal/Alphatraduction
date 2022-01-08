<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        return[
            'First_name'      => 'required|max:25',
            'Last_name'       => 'required|max:25',
            'Email'           => 'required|max:30|unique:orders',
            'whatsapp_number' => 'required|digits_between:13,14|numeric',
            'Message'         => 'required|max:2000'
        ];

    }

    public function getMessages()
    {
        return[
            'First_name.required'      => __('message.First name is required'),
            'Last_name.required'       => __('message.Last name is required'),
            'Email.required'           => __('message.Email is required'),
            'Email.unique'             => __('message.Email already used'),
            'whatsapp_number.required' => __('message.Number is required'),
            'whatsapp_number.digits_between:13,14'    => __('message.Number is required'),
            'Message.required'         => __('message.Message is required'),
        ];

    }
}

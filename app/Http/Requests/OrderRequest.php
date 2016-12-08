<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OrderRequest extends Request
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
            'type' => 'required',
            'title' => 'required',
            'fullname' => 'required|min:2',
            'address' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|min:8|max:20',
            'PLZ' => 'required',
            'coffer_number' => 'required|digits:1',
            'passengers' => 'required|digits:1',
            'message' => 'max:500',
            'date' => 'required|date',
            'time' => 'required',
            'plane_from' => 'required_if:type,Vom Flughafen',
            'flight_number' => 'required_with:plane_from'
        ];
    }

    public function messages(){
        return [
            'fullname.required' => 'Please enter your full Name.',
            'address.required' => 'A valid Address is required.',
            'email.required' => 'Please enter a valid email.',
            'phone_number.required' => 'A valid phone Number is required',
            'PLZ.required' => 'PLZ is required.',
            'message.max:500' => 'Maximum message length is 500 Charachters',

        ];
    }
}

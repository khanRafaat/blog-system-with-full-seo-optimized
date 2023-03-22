<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WriterValidation extends FormRequest
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
            'fname' => 'required',
            'lname' => 'required',
            'email' =>'required|unique:bewriter_infos,email',
            'dob' =>'required',
            'phone' =>'required',
            'country' =>'required',
            'cv' =>'required|mimes:pdf',
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fname.required' => 'Please Enter First Name',
            'lname.required' => 'Please Enter Last Name',
            'email.required' => 'Please Enter Your Email',
            'email.unique' => 'This Email already exist',
            'dob.required' => 'Please Enter your Date of Birth',
            'phone.required' => 'Please Enter your Phone Number',
            'country.required' => 'Select Your  Country Name',
            'cv.required' => 'Please Select Your CV',
            'cv.mimes' => 'Please Select CV Which Is PDF Format',
        ];
    }
}

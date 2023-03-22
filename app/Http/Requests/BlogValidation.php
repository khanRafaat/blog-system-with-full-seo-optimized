<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogValidation extends FormRequest
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
            'title' => 'required',
            'slug' => 'required',
            // 'image' => 'required|mimes:jpeg,jpg,webp',
            'summary' => 'required',
            'description' => 'required',
            'category_id' => 'required', 
            'imagealt' => 'required',
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
            'title.required' => 'Please Enter Title',
            'slug.required' => 'Please Enter Slug',
            'image.required' => 'Please Select an Feature Image',
            // 'image.mimes' => 'Feature image support only .webp format',
            'summary.required' => 'Please Insert Summury',
            'description.required' => 'Blog body text cannot be empty',
            'category_id.required' => 'Please Select At least one Category',
            'imagealt.required'=>'Please insert Image alt text',
        ];
    }
}

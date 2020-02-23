<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollegeUpdateRequest extends FormRequest
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
            'name' => 'required|max:191',
            'area' => 'nullable|string|min:5',
            'about' => 'nullable|string|min:50',
            'meta_keyworks' => 'nullable|string|max:191',
            'addmission_info' => 'nullable|string|min:50',
            'full_address' => 'nullable|string|min:20',
            'short_description' => 'nullable|string|min:50',
            'description' => 'nullable|string|min:50',            
            'display_order' => 'required|numeric',
            'total_students' => 'nullable|numeric',
            'display_at_home' => 'required|boolean',
            'status' => 'required|boolean',
        ];
    }
}

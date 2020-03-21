<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Recaptcha;

class FranchiseStore extends FormRequest
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
            'name'=>['required', 'string', 'max:50', 'min:3'],
            'email' => ['nullable', 'string', 'email', 'max:191'],
            'phone'=>['required', 'string', 'max:15', 'min:10'],
            'age'=>['required', 'string', 'max:15'],
            'state'=>['required', 'string', 'max:50'],
            'location'=>['required', 'string', 'max:191'],
            'investment'=>['required', 'string', 'max:191'],
            'prefertostart'=>['required', 'string', 'max:191'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CollegeStoreRequest extends FormRequest
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
            'name' => 'required|max:191|unique:colleges',
            'area' => 'nullable|string|min:5',
            'about' => 'nullable|string|min:50',
            'meta_keyworks' => 'nullable|string|max:191',
            'addmission_info' => 'nullable|string|min:50',
            'full_address' => 'nullable|string|min:20',
            'short_description' => 'nullable|string|min:50',
            'description' => 'nullable|string|min:50',            
            'dispaly_order' => 'nullable|numeric',
            'total_students' => 'nullable|numeric',
            'dispaly_at_home' => 'required|boolean',
        ];
    }
}

/*
$table->string('name', 191); 
            $table->string('area', 50)->nullable();           
            $table->text('about')->nullable();
            $table->longText('addmission_info')->nullable();
            $table->decimal('total_students', 5,0)->nullable();
            $table->text('full_address')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();  
            $table->boolean('dispaly_at_home')->default(false);         
            $table->boolean('status')->default(true);  

*/

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'name' => 'required',
            'model' => 'required',
            'odometer' => 'required|numeric|gte:0',
            'fuel_type' => 'required',
        ];
    }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsPost extends FormRequest
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
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'maxSpeed' => 'gte:20|lte:300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoors' => 'required|gte:2|lte:5'
        ];
    }
}

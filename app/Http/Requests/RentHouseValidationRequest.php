<?php

namespace App\Http\Requests;

use App\Rules\PropertyName;
use Illuminate\Foundation\Http\FormRequest;

class RentHouseValidationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'project_type' =>
                [
                // 'required',
                new PropertyName()
                ]
            ,
            'availability' =>[
                'required',
                'invalid_date']
            ,
            'developer' => 'required',
            'floor_lv' => 'required',
            'floor_size' => 'required',
            'psf' => 'required',
            'mrt_near' => 'required',
            'address' => 'required',
            'ros' => 'required',
            'price' => 'required|numeric',
            'images' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'no_room' => 'required|numeric',
            'no_birth' => 'required|numeric',
            'keyfeatures' => 'required',
            'facilities' => 'required',
            'description' => 'required',
        ];
    }
}

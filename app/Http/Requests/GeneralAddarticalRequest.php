<?php

namespace App\Http\Requests;

use App\Rules\PropertyName;
use Illuminate\Foundation\Http\FormRequest;

class GeneralAddarticalRequest extends FormRequest
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
            'gname'=>[
                'required',
                new PropertyName()
            ],
            // 'gname' => 'required|string',
            'gtitle' => 'required|string',
            'gheader_id' => 'required',
            'gphotos' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'gdescription' => 'required',
        ];
    }
    public function messages(){
        return [
            'gname.required' => 'Name is required',
            'gname.string' => 'Name must be string',
            'gtitle.required' => 'Post title is required',
            'gtitle.string' => 'Title must be string',
        ];
    }

}

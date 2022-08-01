<?php

namespace App\Http\Requests;

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
            //
            'gname' => 'required',
            'gtitle' => 'required|string',
            'gheader_id' => 'required',
            'gphotos' => 'image|mimes:jpeg,png,jpg|max:1024',
            'gdescription' => 'required',
        ];
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'gname' => 'required',
            'gtitle' => 'required|string',
            'gheader_id' => 'required',
            'gphotos' => 'image|mimes:jpeg,png,jpg|max:1024',
            'gdescription' => 'required',
        ]);
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'job_title' => 'required',
            'company' => 'required',
            'salary' => 'required|numeric',
            'job_location' => 'required',
            'job_category' => 'required',
            'company_url_link' => 'required',
            'exp_level' => 'required',
            'job_description' => 'required',
            'job_type_role' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        $logo='required|dimensions:min_width=100,min_height=100';
        $email='unique:companies';
        if ($this->isMethod('put')) {
            $logo='dimensions:min_width=100,min_height=100';
            $email='';
        }
        return [
            'name'=>'required|string',
            'email'=>'required|email|email'.$email,
            'website'=>'required|string',
            'revenue'=>'required|string',
            'logo' => $logo
        ];
    }
}

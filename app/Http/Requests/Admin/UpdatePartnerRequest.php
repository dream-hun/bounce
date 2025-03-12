<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('partner_edit');
    }

    public function rules(): array
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:partners,title,'.request()->route('partner')->id,
            ],
            'logo' => [
                'required',
            ],
        ];
    }
}

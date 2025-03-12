<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePartnerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('partner_create');
    }

    public function rules(): array
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:partners',
            ],
            'logo' => [
                'required',
            ],
        ];
    }
}

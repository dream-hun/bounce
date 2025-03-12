<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('setting_create');
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'unique:settings',
            ],
            'phone_number' => [
                'string',
                'required',
                'unique:settings',
            ],
            'facebook' => [
                'string',
                'required',
            ],
            'twitter' => [
                'string',
                'required',
            ],
            'instagram' => [
                'string',
                'required',
            ],
            'tiktok' => [
                'string',
                'required',
            ],
            'youtube' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
        ];
    }
}

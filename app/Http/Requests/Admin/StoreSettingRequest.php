<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class StoreSettingRequest extends FormRequest
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

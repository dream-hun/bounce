<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('setting_edit');
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'unique:settings,email,'.request()->route('setting')->id,
            ],
            'phone_number' => [
                'string',
                'required',
                'unique:settings,phone_number,'.request()->route('setting')->id,
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

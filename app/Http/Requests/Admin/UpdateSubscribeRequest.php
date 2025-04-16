<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateSubscribeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('subscribe_edit');
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'unique:subscribes,email,'.request()->route('subscribe')->id,
            ],
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class StoreSubscribeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('subscribe_create');
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'unique:subscribes',
            ],
        ];
    }
}

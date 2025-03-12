<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreSubscribeRequest extends FormRequest
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

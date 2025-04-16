<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class StorePartnerRequest extends FormRequest
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

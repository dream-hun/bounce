<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class UpdatePartnerRequest extends FormRequest
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

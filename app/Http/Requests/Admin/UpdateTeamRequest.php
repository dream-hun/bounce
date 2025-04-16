<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateTeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('team_edit');
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'is_available' => [
                'required',
            ],
        ];
    }
}

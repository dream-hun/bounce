<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class StoreGameRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('game_create');
    }

    public function rules(): array
    {
        return [
            'team_one_id' => [
                'required',
                'integer',
            ],
            'team_two_id' => [
                'required',
                'integer',
            ],
            'avenue' => [
                'string',
                'required',
            ],
            'game_date' => [
                'required',
                'date_format:'.config('panel.date_format'),
            ],
            'game_time' => [
                'required',
                'date_format:'.config('panel.time_format'),
            ],
            'ticket_url' => [
                'string',
                'required',
            ],
        ];
    }
}

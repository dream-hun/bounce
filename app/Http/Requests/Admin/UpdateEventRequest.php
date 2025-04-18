<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('event_edit');
    }

    public function rules(): array
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'event_date' => [
                'required',
                'date_format:'.config('panel.date_format'),
            ],
            'event_time' => [
                'required',
                'date_format:'.config('panel.time_format'),
            ],
            'location' => [
                'string',
                'required',
            ],
            'featured_image' => [
                'required',
            ],
            'ticket_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}

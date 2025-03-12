<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('event_create');
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

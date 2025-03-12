<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('blog_create');
    }

    public function rules(): array
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'featured_image' => [
                'required',
            ],
            'body' => [
                'required',
            ],
        ];
    }
}

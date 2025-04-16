<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('blog_edit');
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

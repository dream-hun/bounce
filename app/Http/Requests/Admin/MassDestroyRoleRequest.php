<?php

namespace App\Http\Requests\Admin;

use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRoleRequest extends FormRequest
{
    public function authorize(): true
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'ids' => 'required|array',
            'ids.*' => 'exists:roles,id',
        ];
    }
}

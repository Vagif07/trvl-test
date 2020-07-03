<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $employee = $this->route('employee');
        return [
            'f_name' => ['nullable', 'string', 'max:255'],
            'l_name' => ['nullable', 'string', 'max:255'],
            'company_id' => ['nullable', 'integer', 'exists:companies,id'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:employees,email,' . $employee->id],
            'phone' => ['nullable', 'numeric', 'unique:employees,phone,' . $employee->id],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|max:255",
            "course_id" => "required|exists:courses,id",
            "teacher_id" => "nullable|exists:users,id",
            "start_date" => "required|date",
            "finish_date" => "required|date|after:start_date",
            "students_count" => "required|numeric|min:10|max:30",
            "start_time" => "required",
            "end_time" => "required",
            "schedule_type" => "required"
        ];
    }
}

<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'building_id' => 'required|integer|exists:buildings,id',
            'name' => 'required|string|max:255',
            'max_capacity' => 'required|integer|min:1',
            'floor' => 'required|integer|min:0',
            'description' => 'nullable|string|max:1000',
            'type' => 'nullable|string|max:50',
            'is_active' => 'boolean',
        ];
    }
}

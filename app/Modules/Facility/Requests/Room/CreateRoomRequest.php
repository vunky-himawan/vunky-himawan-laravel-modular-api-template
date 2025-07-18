<?php

namespace App\Modules\Facility\Requests\Room;

use App\Common\Requests\BaseFormRequest;

class CreateRoomRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // TODO: Implement authorization logic if needed
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

    public function messages(): array
    {
        return [
            'building_id.required' => 'Building ID is required.',
            'building_id.exists' => 'The selected building does not exist.',
            'name.required' => 'Room name is required.',
            'max_capacity.required' => 'Maximum capacity is required.',
            'floor.required' => 'Floor number is required.',
            'description.max' => 'Description cannot exceed 1000 characters.',
            'type.max' => 'Type cannot exceed 50 characters.',
        ];
    }
}

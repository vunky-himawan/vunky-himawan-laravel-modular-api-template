<?php

namespace App\DTOs\Room;

use Illuminate\Http\Request;

class CreateRoomDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public int $building_id,
        public string $name,
        public int $max_capacity,
        public int $floor,
        public ?string $description = null,
        public ?string $type = null,
        public bool $is_active = true,
    ) {}

    public static function fromRequest(Request $request): CreateRoomDTO
    {
        return new self(
            building_id: (int) $request->input('building_id'),
            name: $request->input('name'),
            max_capacity: (int) $request->input('max_capacity'),
            floor: (int) $request->input('floor'),
            description: $request->input('description'),
            type: $request->input('type'),
            is_active: (bool) $request->input('is_active', true)
        );
    }

    public function toArray(): array
    {
        return [
            'building_id' => $this->building_id,
            'name' => $this->name,
            'max_capacity' => $this->max_capacity,
            'floor' => $this->floor,
            'description' => $this->description,
            'type' => $this->type,
            'is_active' => $this->is_active,
        ];
    }
}

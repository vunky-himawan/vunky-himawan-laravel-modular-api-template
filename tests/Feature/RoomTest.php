<?php

namespace Tests\Feature;

use App\DTOs\Room\CreateRoomDTO;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test the index method of the RoomController.
     *
     * @return void
     *
     * TODO: implement auth middleware
     */
    public function test_cannot_create_room_with_unavailable_building()
    {
        $this->assertDatabaseMissing('buildings', ['id' => 1]);

        $dto = new CreateRoomDTO(
            1,
            'Conference Room',
            20,
            4,
            'Large conference room with video conferencing capabilities',
            'conference',
            true
        );

        $response = $this->postJson('/api/v1/rooms', $dto->toArray());

        dump($response->json());

        $response->assertStatus(422);

        $response->assertJsonValidationErrors(['building_id']);

        $this->assertDatabaseMissing('rooms', [
            'name' => $dto->name,
        ]);
    }
}

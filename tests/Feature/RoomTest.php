<?php

namespace Tests\Feature;

use App\Models\Room;
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
    public function test_create_room()
    {
        $response = $this->postJson('/api/v1/rooms', [
            
        ])
    }
}

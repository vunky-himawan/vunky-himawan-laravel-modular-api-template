<?php

namespace App\Docs\Schemas;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Room",
 *     type="object",
 *
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="building_id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Ruang Rapat A"),
 *     @OA\Property(property="max_capacity", type="integer", example=10),
 *     @OA\Property(property="floor", type="integer", example=1),
 *     @OA\Property(property="type", type="string", example="Meeting Room"),
 *     @OA\Property(property="description", type="string", example="Ruang rapat dengan kapasitas 10 orang"),
 *     @OA\Property(property="is_active", type="boolean", example=true),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-06-18T07:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-06-18T07:00:00Z")
 * )
 */
class Room {}

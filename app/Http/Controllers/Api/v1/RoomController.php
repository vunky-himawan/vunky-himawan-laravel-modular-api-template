<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/api/rooms",
 *     tags={"Rooms"},
 *     summary="Get all meeting rooms",
 *     @OA\Response(
 *         response=200,
 *         description="Success",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="statusCode", type="integer", example=200),
 *             @OA\Property(property="message", type="string", example="Success"),
 *             @OA\Property(
 *                 property="data",
 *                 type="array",
 *                 @OA\Items(
 *                     type="object",
 *                     @OA\Property(property="id", type="integer", example=1),
 *                     @OA\Property(property="building_id", type="integer", example=1),
 *                     @OA\Property(property="name", type="string", example="Ruang Rapat A"),
 *                     @OA\Property(property="max_capacity", type="integer", example=10),
 *                     @OA\Property(property="floor", type="integer", example=1),
 *                     @OA\Property(property="type", type="string", example="Meeting Room"),
 *                     @OA\Property(property="description", type="string", example="Ruang rapat dengan kapasitas 10 orang"),
 *                     @OA\Property(property="is_active", type="boolean", example=true),
 *                     @OA\Property(property="created_at", type="string", format="date-time", example="2025-06-18T07:00:00Z"),
 *                     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-06-18T07:00:00Z")
 *                 )
 *             ),
 *             @OA\Property(property="meta", type="string", nullable=true, example=null)
 *         )
 *     )
 * )
 */
class RoomController extends Controller
{
    public function index(): JsonResponse
    {
        // Simulasi data
        $rooms = [
            [
                "id" => 1,
                "building_id" => 1,
                "name" => "Ruang Rapat A",
                "max_capacity" => 10,
                "floor" => 1,
                "type" => "Meeting Room",
                "description" => "Ruang rapat dengan kapasitas 10 orang",
                "is_active" => true,
                "created_at" => now()->toISOString(),
                "updated_at" => now()->toISOString(),
            ],
        ];

        return response()->json([
            "statusCode" => 200,
            "message" => "Success",
            "data" => $rooms,
            "meta" => null,
        ]);
    }
}

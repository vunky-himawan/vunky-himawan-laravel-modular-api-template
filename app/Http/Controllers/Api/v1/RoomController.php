<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/v1/rooms",
 *     summary="Get all meeting rooms",
 *     tags={"Rooms"},
 *     @OA\Response(
 *         response=200,
 *         description="Success",
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(ref="#/components/schemas/BaseSuccessResponse"),
 *                 @OA\Schema(
 *                     @OA\Property(
 *                         property="data",
 *                         type="array",
 *                         @OA\Items(ref="#/components/schemas/Room")
 *                     ),
 *                     @OA\Property(
 *                         property="meta",
 *                         ref="#/components/schemas/PaginatedMeta"
 *                     )
 *                 )
 *             }
 *         )
 *     ),
 *     @OA\Response(response=400, ref="#/components/responses/BadRequestResponse"),
 *     @OA\Response(response=401, ref="#/components/responses/UnauthorizedResponse"),
 *     @OA\Response(response=403, ref="#/components/responses/ForbiddenResponse"),
 *     @OA\Response(response=500, ref="#/components/responses/InternalServerErrorResponse")
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
            "success" => true, // Changed from statusCode to success
            "message" => "Success",
            "data" => $rooms,
            "meta" => null,
        ]);
    }
}

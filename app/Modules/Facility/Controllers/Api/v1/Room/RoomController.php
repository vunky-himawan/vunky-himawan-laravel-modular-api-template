<?php

namespace App\Modules\Facility\Controllers\Api\v1\Room;

use App\Common\Controllers\Controller;
use App\Common\DTOs\PaginationDTO;
use App\Common\Requests\PaginationRequest;
use App\Modules\Facility\DTOs\Room\CreateRoomDTO;
use App\Modules\Facility\Requests\Room\CreateRoomRequest;
use App\Modules\Facility\Services\Room\RoomService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/rooms",
 *     summary="Get all meeting rooms",
 *     security={{"bearerToken":{}}},
 *     tags={"Rooms"},
 *
 *     @OA\Parameter(ref="#/components/parameters/Page"),
 *     @OA\Parameter(ref="#/components/parameters/PerPage"),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Success",
 *
 *         @OA\JsonContent(
 *             allOf={
 *
 *                 @OA\Schema(ref="#/components/schemas/BaseSuccessResponse"),
 *                 @OA\Schema(
 *
 *                     @OA\Property(
 *                         property="data",
 *                         type="array",
 *
 *                         @OA\Items(ref="#/components/schemas/Room")
 *                     ),
 *
 *                     @OA\Property(
 *                         property="meta",
 *                         ref="#/components/schemas/PaginatedMeta"
 *                     )
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(response=400, ref="#/components/responses/BadRequestResponse"),
 *     @OA\Response(response=401, ref="#/components/responses/UnauthorizedResponse"),
 *     @OA\Response(response=403, ref="#/components/responses/ForbiddenResponse"),
 *     @OA\Response(response=500, ref="#/components/responses/InternalServerErrorResponse")
 * )
 */
class RoomController extends Controller
{
    protected RoomService $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(PaginationRequest $request): JsonResponse
    {
        $paginationDTO = PaginationDTO::fromRequest($request->validated());

        $rooms = $this->roomService->getRoomsWithPagination($paginationDTO);

        return $this->paginatedResponse($rooms, 'Success');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRoomRequest $request)
    {
        $dto = CreateRoomDTO::fromRequest($request->validated());

        $room = $this->roomService->createRoom($dto->toArray());

        return $this->createdResponse($room, 'Room created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

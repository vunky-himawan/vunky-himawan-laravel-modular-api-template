<?php

namespace App\Http\Controllers\Api\v1;

use App\DTOs\PaginationDTO;
use App\DTOs\Room\CreateRoomDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaginationRequest;
use App\Http\Requests\Room\CreateRoomRequest;
use App\Services\Room\RoomService;
use Illuminate\Http\JsonResponse;

/**
 * @OA\Get(
 *     path="/rooms",
 *     summary="Get all meeting rooms",
 *     security={{"bearerToken":{}}},
 *     tags={"Rooms"},
 *     @OA\Parameter(ref="#/components/parameters/Page"),
 *     @OA\Parameter(ref="#/components/parameters/PerPage"),
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

        return $this->paginatedResponse($rooms, "Success");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRoomRequest $request)
    {
        $dto = CreateRoomDTO::fromRequest($request->validated());

        $room = $this->roomService->createRoom($dto->toArray());
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

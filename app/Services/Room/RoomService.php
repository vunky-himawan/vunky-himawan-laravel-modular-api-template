<?php

namespace App\Services\Room;

use App\DTOs\PaginationDTO;
use App\Http\Repositories\Eloquents\Room\RoomRepository;

class RoomService
{
    protected RoomRepository $roomRepository;

    /**
     * Create a new class instance.
     */
    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function getRoomsWithPagination(PaginationDTO $paginationDTO): mixed
    {
        return $this->roomRepository->paginate($paginationDTO);
    }

    public function createRoom(array $data): mixed
    {
        return $this->roomRepository->create($data);
    }
}

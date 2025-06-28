<?php

namespace App\Modules\Facility\Services\Room;

use App\Common\DTOs\PaginationDTO;
use App\Modules\Facility\Repositories\Eloquents\Room\RoomRepository;

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

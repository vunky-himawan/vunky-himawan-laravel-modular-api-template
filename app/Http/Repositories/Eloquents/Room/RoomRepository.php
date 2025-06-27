<?php

namespace App\Http\Repositories\Eloquents\Room;

use App\Http\Repositories\Eloquents\BaseRepository;
use App\Models\Room;

class RoomRepository extends BaseRepository
{
    public function __construct(Room $model)
    {
        parent::__construct($model);
    }
}

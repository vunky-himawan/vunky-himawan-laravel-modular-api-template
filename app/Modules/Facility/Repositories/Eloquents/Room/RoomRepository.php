<?php

namespace App\Modules\Facility\Repositories\Eloquents\Room;

use App\Common\Repositories\Eloquents\BaseRepository;
use App\Modules\Facility\Models\Room;

class RoomRepository extends BaseRepository
{
    public function __construct(Room $model)
    {
        parent::__construct($model);
    }
}

<?php

namespace App\Http\Repositories\Eloquents;

use App\Http\Repositories\Contracts\BaseRepositoryInterface;
use App\Models\Room;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BuildingRepository implements BaseRepositoryInterface
{
    public function all(): Collection
    {
        return Room::all();
    }

    public function find(int $id): ?Model
    {
        return Room::find($id);
    }

    public function create(array $data): Model
    {
        return Room::create($data);
    }

    public function update(int $id, array $data): ?Model
    {
        $room = Room::find($id);
        if ($room) {
            $room->update($data);
            return $room;
        }
        return null;
    }

    public function delete(int $id): bool
    {
        $room = Room::find($id);
        if ($room) {
            $room->delete();
            return true;
        }
        return false;
    }
}

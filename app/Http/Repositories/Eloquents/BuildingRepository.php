<?php

namespace App\Http\Repositories\Eloquents;

use App\Http\Repositories\Contracts\BaseRepositoryInterface;
use App\Models\Building;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BuildingRepository implements BaseRepositoryInterface
{
    public function all(): Collection
    {
        return Building::all();
    }

    public function find(int $id): ?Model
    {
        return Building::find($id);
    }

    public function create(array $data): Model
    {
        return Building::create($data);
    }

    public function update(int $id, array $data): ?Model
    {
        $building = Building::find($id);
        if ($building) {
            $building->update($data);
            return $building;
        }
        return null;
    }

    public function delete(int $id): bool
    {
        $building = Building::find($id);
        if ($building) {
            $building->delete();
            return true;
        }
        return false;
    }
}

<?php

namespace App\Http\Repositories\Eloquents;

use App\DTOs\PaginationDTO;
use App\Http\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function paginate(PaginationDTO $request): LengthAwarePaginator
    {
        return $this->model->paginate(
            $request->perPage,
            ['*'],
            'page',
            $request->page
        );
    }

    public function find(int|string $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int|string $id, array $data): ?Model
    {
        $room = $this->model->findOrFail($id);

        if ($room) {
            $room->update($data);

            return $room;
        }

        return null;
    }

    public function delete(int|string $id): bool
    {
        $room = $this->model->findOrFail($id);

        if ($room) {
            $room->delete();

            return true;
        }

        return false;
    }
}

<?php

namespace App\Http\Repositories\Contracts;

use App\DTOs\PaginationDTO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    public function find(int|string $id): ?Model;
    public function create(array $data): Model;
    public function update(int|string $id, array $data): ?Model;
    public function delete(int|string $id): bool;
    public function paginate(PaginationDTO $request): LengthAwarePaginator;
}

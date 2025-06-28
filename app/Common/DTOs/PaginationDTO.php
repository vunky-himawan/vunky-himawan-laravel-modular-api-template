<?php

namespace App\Common\DTOs;

class PaginationDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public int $page,
        public int $perPage,
    ) {}

    public static function fromRequest(array $request): PaginationDTO
    {
        return new self(
            page: (int) ($request['page'] ?? 1),
            perPage: (int) ($request['per_page'] ?? 10)
        );
    }

    public function toArray(): array
    {
        return [
            'page' => $this->page,
            'per_page' => $this->perPage,
        ];
    }
}

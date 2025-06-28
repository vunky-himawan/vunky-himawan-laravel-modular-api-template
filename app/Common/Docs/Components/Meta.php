<?php

namespace App\Common\Docs\Components;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="PaginatedMeta",
 *     type="object",
 *
 *     @OA\Property(property="current_page", type="integer", example=1),
 *     @OA\Property(property="per_page", type="integer", example=15),
 *     @OA\Property(property="total", type="integer", example=100),
 *     @OA\Property(property="total_pages", type="integer", example=7)
 * )
 */
class Meta {}

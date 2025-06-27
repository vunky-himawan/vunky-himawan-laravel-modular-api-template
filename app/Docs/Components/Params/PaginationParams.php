<?php

namespace App\Docs\Components\Params;

use OpenApi\Annotations as OA;

/**
 * @OA\Parameter(
 *     parameter="Page",
 *     name="page",
 *     in="query",
 *     required=false,
 *     description="Page number",
 *     @OA\Schema(type="integer", example=1)
 * ),
 * @OA\Parameter(
 *     parameter="PerPage",
 *     name="per_page",
 *     in="query",
 *     required=false,
 *     description="Number of items per page",
 *     @OA\Schema(type="integer", example=10)
 * )
 */
class PaginationParams {}

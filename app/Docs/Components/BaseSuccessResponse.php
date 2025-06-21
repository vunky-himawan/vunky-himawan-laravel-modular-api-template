<?php

namespace App\Docs\Components;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="BaseSuccessResponse",
 *     type="object",
 *     @OA\Property(property="data", type="object", nullable=true),
 *     @OA\Property(property="message", type="string", example="Success"),
 *     @OA\Property(property="statusCode", type="integer", example=200),
 *     @OA\Property(property="meta", type="object", nullable=true)
 * )
 */
class BaseSuccessResponse {}

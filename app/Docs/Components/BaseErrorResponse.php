<?php

namespace App\Docs\Components;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 * schema="BaseErrorResponse",
 * type="object",
 *
 * @OA\Property(property="message", type="string", example="Error occurred"),
 * @OA\Property(property="statusCode", type="integer", example=400),
 * @OA\Property(property="errors", type="object", nullable=true),
 * @OA\Property(property="data", type="object", nullable=true)
 * )
 */
class BaseErrorResponse {}

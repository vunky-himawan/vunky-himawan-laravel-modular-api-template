<?php

namespace App\Docs\Components\Errors;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="InternalServerErrorResponse",
 *     description="Internal Server Error Response",
 *     @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Internal server error"),
 *         @OA\Property(property="statusCode", type="integer", example=500),
 *     )
 * )
 */

class InternalServerErrorResponse {}

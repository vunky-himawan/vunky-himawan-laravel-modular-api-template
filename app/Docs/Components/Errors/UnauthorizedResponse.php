<?php

namespace App\Docs\Components\Errors;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="UnauthorizedResponse",
 *     description="Unauthorized Response",
 *
 *     @OA\JsonContent(
 *
 *         @OA\Property(property="message", type="string", example="Unauthorized, you must be logged in to access this resource"),
 *         @OA\Property(property="statusCode", type="integer", example=401),
 *     )
 * )
 */
class UnauthorizedResponse {}

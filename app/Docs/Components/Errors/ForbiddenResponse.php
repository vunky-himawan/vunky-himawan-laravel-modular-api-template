<?php

namespace App\Docs\Components\Errors;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="ForbiddenResponse",
 *     description="Forbidden Response",
 *
 *     @OA\JsonContent(
 *
 *         @OA\Property(property="message", type="string", example="Forbidden, you do not have permission to access this resource"),
 *         @OA\Property(property="statusCode", type="integer", example=403),
 *     )
 * )
 */
class ForbiddenResponse {}

<?php

namespace App\Docs\Components\Errors;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="NotFoundResponse",
 *     description="Not Found Response",
 *     @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Resource not found"),
 *         @OA\Property(property="statusCode", type="integer", example=404),
 *     )
 * )
 */
class NotFoundResponse {}

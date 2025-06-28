<?php

namespace App\Docs\Components\Errors;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="BadRequestResponse",
 *     description="Bad Request Response",
 *
 *     @OA\JsonContent(
 *
 *         @OA\Property(property="message", type="string", example="Bad request"),
 *         @OA\Property(property="statusCode", type="integer", example=400)
 *     )
 * )
 */
class BadRequestResponse {}

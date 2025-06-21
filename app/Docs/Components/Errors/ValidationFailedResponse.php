<?php

namespace App\Docs\Components\Errors;

use OpenApi\Annotations as OA;

/**
 * @OA\Response(
 *     response="ValidationFailedResponse",
 *     description="Validation Failed Response",
 *     @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Validation failed for the provided data"),
 *         @OA\Property(property="statusCode", type="integer", example=422),
 *       @OA\Property(property="errors", type="array", @OA\Items(
 *             @OA\Property(property="field", type="string", example="email"),
 *             @OA\Property(property="message", type="string", example="The email field is required.")
 *         ))
 *     )
 * )
 */

class ValidationFailedResponse {}

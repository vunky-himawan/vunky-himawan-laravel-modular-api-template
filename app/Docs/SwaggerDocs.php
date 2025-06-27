<?php

namespace App\Docs;

use OpenApi\Attributes as OA;

/**
 * @OA\Info(
 *     title="Booking Rooms API",
 *     version="1.0.0",
 *     description="Dokumentasi Booking Room System"
 * )
 * @OA\SecurityScheme(
 *     securityScheme="bearerToken",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="Passport",
 *     description="Masukkan token Anda dengan format: Bearer {token}"
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000/api/v1",
 *     description="Version 1"
 * )
 */
class SwaggerDocs {}

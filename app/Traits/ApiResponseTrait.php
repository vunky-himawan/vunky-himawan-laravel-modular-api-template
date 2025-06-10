<?php

namespace App\Traits;

use App\Http\Responses\ApiResponse;
use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{
    protected function successResponse(
        mixed $data = null,
        string $message = 'Success',
        int $statusCode = 200
    ): JsonResponse {
        return ApiResponse::success($data, $message, $statusCode);
    }

    protected function errorResponse(
        string $message = 'Error occurred',
        int $statusCode = 400,
        mixed $errors = null
    ): JsonResponse {
        return ApiResponse::error($message, $statusCode, $errors);
    }

    protected function createdResponse(
        mixed $data = null,
        string $message = 'Resource created successfully'
    ): JsonResponse {
        return ApiResponse::created($data, $message);
    }

    protected function updatedResponse(
        mixed $data = null,
        string $message = 'Resource updated successfully'
    ): JsonResponse {
        return ApiResponse::updated($data, $message);
    }

    protected function deletedResponse(
        string $message = 'Resource deleted successfully'
    ): JsonResponse {
        return ApiResponse::deleted($message);
    }

    protected function notFoundResponse(
        string $message = 'Resource not found'
    ): JsonResponse {
        return ApiResponse::notFound($message);
    }

    protected function validationErrorResponse(
        array $errors,
        string $message = 'Validation failed'
    ): JsonResponse {
        return ApiResponse::validationError($errors, $message);
    }

    protected function paginatedResponse(
        $paginatedData,
        string $message = 'Data retrieved successfully'
    ): JsonResponse {
        return ApiResponse::paginated($paginatedData, $message);
    }
}

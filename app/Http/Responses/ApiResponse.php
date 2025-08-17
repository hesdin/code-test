<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class ApiResponse implements Responsable
{
    public function __construct(
        protected mixed $data = null,
        protected ?string $message = null,
        protected int $status = 200,
        protected array $headers = [],
        protected int $jsonOptions = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    ) {}

    public function toResponse($request): JsonResponse
    {
        $payload = array_filter([
            'success' => $this->status >= 200 && $this->status < 400,
            'message' => $this->message,
            'data'    => $this->data,
        ], fn($v) => !is_null($v));

        return response()->json($payload, $this->status, $this->headers, $this->jsonOptions);
    }

    public static function ok(mixed $data = null, ?string $msg = 'OK'): static
    {
        return new static($data, $msg, 200);
    }
    public static function created(mixed $data = null, ?string $msg = 'Created'): static
    {
        return new static($data, $msg, 201);
    }
    public static function noContent(): JsonResponse
    {
        return response()->json(null, 204);
    }
    public static function error(string $msg = 'Error', int $status = 400, mixed $errors = null): static
    {
        $data = is_null($errors) ? null : ['errors' => $errors];
        return new static($data, $msg, $status);
    }

    public static function fromValidationException(\Illuminate\Validation\ValidationException $e): static
    {
        return self::error(__('validation.failed'), $e->status, $e->errors());
    }
}

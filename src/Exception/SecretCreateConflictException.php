<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class SecretCreateConflictException extends ConflictException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('name conflicts with an existing object', 409);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}

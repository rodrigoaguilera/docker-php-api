<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class NetworkInspectNotFoundException extends NotFoundException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Network not found', 404);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}

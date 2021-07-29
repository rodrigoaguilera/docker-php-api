<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class TaskInspectNotFoundException extends NotFoundException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('no such task', 404);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}

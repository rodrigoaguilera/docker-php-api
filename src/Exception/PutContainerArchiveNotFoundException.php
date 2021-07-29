<?php

declare(strict_types=1);

namespace Docker\API\Exception;

class PutContainerArchiveNotFoundException extends NotFoundException
{
    private $errorResponse;

    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('No such container or path does not exist inside the container', 404);
        $this->errorResponse = $errorResponse;
    }

    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}

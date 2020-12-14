<?php

declare(strict_types=1);

namespace Docker\API\Model;

class TaskSpecNetworkAttachmentSpec
{
    /**
     * ID of the container represented by this task.
     *
     * @var string|null
     */
    protected $containerID;

    /**
     * ID of the container represented by this task.
     */
    public function getContainerID(): ?string
    {
        return $this->containerID;
    }

    /**
     * ID of the container represented by this task.
     */
    public function setContainerID(?string $containerID): self
    {
        $this->containerID = $containerID;

        return $this;
    }
}

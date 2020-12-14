<?php

declare(strict_types=1);

namespace Docker\API\Model;

class Mount
{
    /**
     * Container path.
     *
     * @var string|null
     */
    protected $target;
    /**
     * Mount source (e.g. a volume name, a host path).
     *
     * @var string|null
     */
    protected $source;
    /**
     * The mount type. Available types:.
     *
     * - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
     * - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
     * - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
     * - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Whether the mount should be read-only.
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     *
     * @var string|null
     */
    protected $consistency;
    /**
     * Optional configuration for the `bind` type.
     *
     * @var MountBindOptions|null
     */
    protected $bindOptions;
    /**
     * Optional configuration for the `volume` type.
     *
     * @var MountVolumeOptions|null
     */
    protected $volumeOptions;
    /**
     * Optional configuration for the `tmpfs` type.
     *
     * @var MountTmpfsOptions|null
     */
    protected $tmpfsOptions;

    /**
     * Container path.
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * Container path.
     */
    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Mount source (e.g. a volume name, a host path).
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Mount source (e.g. a volume name, a host path).
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * The mount type. Available types:.
     *
     * - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
     * - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
     * - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
     * - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The mount type. Available types:.
     *
     * - `bind` Mounts a file or directory from the host into the container. Must exist prior to creating the container.
     * - `volume` Creates a volume with the given name and options (or uses a pre-existing volume with the same name and options). These are **not** removed when the container is removed.
     * - `tmpfs` Create a tmpfs with the given options. The mount source cannot be specified for tmpfs.
     * - `npipe` Mounts a named pipe from the host into the container. Must exist prior to creating the container.
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Whether the mount should be read-only.
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Whether the mount should be read-only.
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     */
    public function getConsistency(): ?string
    {
        return $this->consistency;
    }

    /**
     * The consistency requirement for the mount: `default`, `consistent`, `cached`, or `delegated`.
     */
    public function setConsistency(?string $consistency): self
    {
        $this->consistency = $consistency;

        return $this;
    }

    /**
     * Optional configuration for the `bind` type.
     */
    public function getBindOptions(): ?MountBindOptions
    {
        return $this->bindOptions;
    }

    /**
     * Optional configuration for the `bind` type.
     */
    public function setBindOptions(?MountBindOptions $bindOptions): self
    {
        $this->bindOptions = $bindOptions;

        return $this;
    }

    /**
     * Optional configuration for the `volume` type.
     */
    public function getVolumeOptions(): ?MountVolumeOptions
    {
        return $this->volumeOptions;
    }

    /**
     * Optional configuration for the `volume` type.
     */
    public function setVolumeOptions(?MountVolumeOptions $volumeOptions): self
    {
        $this->volumeOptions = $volumeOptions;

        return $this;
    }

    /**
     * Optional configuration for the `tmpfs` type.
     */
    public function getTmpfsOptions(): ?MountTmpfsOptions
    {
        return $this->tmpfsOptions;
    }

    /**
     * Optional configuration for the `tmpfs` type.
     */
    public function setTmpfsOptions(?MountTmpfsOptions $tmpfsOptions): self
    {
        $this->tmpfsOptions = $tmpfsOptions;

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Spiral\RoadRunnerBridge\Config;

use Spiral\Core\InjectableConfig;
use Spiral\RoadRunner\GRPC\ServiceInterface;

final class GRPCConfig extends InjectableConfig
{
    public const CONFIG = 'grpc';

    public function getBinaryPath(): ?string
    {
        return $this->config['binaryPath'] ?? null;
    }

    /**
     * @return array<class-string<ServiceInterface>>
     */
    public function getServices(): array
    {
        return (array)($this->config['services'] ?? []);
    }
}

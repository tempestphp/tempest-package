<?php

namespace Tempest\ExternalPackage;

use Tempest\Interface\Package;

final readonly class TempestExternalPackage implements Package
{
    public function getPath(): string
    {
        return __DIR__;
    }

    public function getNamespace(): string
    {
        return 'Tempest\\ExternalPackage\\';
    }

    public function getDiscovery(): array
    {
        return [];
    }
}
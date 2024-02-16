<?php

namespace Tempest\ExternalPackage;

use Tempest\Console\ConsoleCommand;
use Tempest\Interface\Console;

final readonly class ExternalPackageConsoleCommand
{
    public function __construct(
        private Console $console,
    ) {}

    #[ConsoleCommand('external:hello')]
    public function __invoke(): void
    {
        $this->console->success("Hello!");
    }
}
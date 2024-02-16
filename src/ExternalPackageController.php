<?php

namespace Tempest\ExternalPackage;

use Tempest\Http\Get;
use Tempest\Interface\View;
use function Tempest\view;

final readonly class ExternalPackageController
{
    #[Get('/external')]
    public function __invoke(): View
    {
        return view('external.view.php');
    }
}
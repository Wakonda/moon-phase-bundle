<?php

namespace Wakonda\MoonPhaseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WakondaMoonPhaseBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}

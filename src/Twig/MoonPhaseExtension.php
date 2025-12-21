<?php

namespace Wakonda\MoonPhaseBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

use Wakonda\MoonPhaseBundle\Service\MoonPhase;

class MoonPhaseExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('phase_moon', [$this, 'getPhaseMoon']),
        ];
    }

    public function getPhaseMoon()
    {
        return (new MoonPhase())->phase_name();
    }
}
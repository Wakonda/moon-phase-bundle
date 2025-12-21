<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Wakonda\MoonPhaseBundle\Twig\MoonPhaseExtension;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    // Correspond à <defaults public="false" />
    $services->defaults()
        ->public(false);

    // Correspond à votre service "wakonda_moon_phase.twig.moon_phase_extension"
    $services->set('wakonda_moon_phase.twig.moon_phase_extension', MoonPhaseExtension::class)
        ->tag('twig.extension')
        ->args([]); // Correspond à <argument />, laisse un tableau vide si aucun argument n'est passé
};
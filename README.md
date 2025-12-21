# Moon Phase Bundle
This Symfony bundle allows you to easily display moon phases. It provides a dedicated a Twig extension for your templates.

## Installation
Install the bundle using Composer:

composer require wakonda/moon-phase-bundle

If you are not using Symfony Flex, you must manually register the bundle in config/bundles.php:

```php
return [
    // ...
    Wakonda\MoonPhaseBundle\WakondaMoonPhaseBundle::class => ['all' => true],
];
```

## Usage
### In Twig

```twig
{{ include("@WakondaMoonPhase/widget.html.twig") }}
```

### Result

<img width="567" height="307" alt="image" src="https://github.com/user-attachments/assets/54660194-676a-45be-b650-6aef66854371" />

> Source: https://activite-paranormale.net/grimoire

## License
This bundle is under the MIT license. See the LICENSE file for more details.

## Contributing
Contributions are welcome! Feel free to open an issue or a pull request on the GitHub repository.

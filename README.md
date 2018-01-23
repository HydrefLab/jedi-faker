<p align="center">
    <img src="https://user-images.githubusercontent.com/9950778/34909614-eab4956c-f8a4-11e7-974e-067cd19f6803.png" />
    <br /><br />
    <a href="https://github.com/fzaninotto/Faker" target="_blank">Faker</a> extension for Star Wars junkie.
</p>

[![Build Status](https://travis-ci.org/HydrefLab/jedi-faker.svg?branch=master)](https://travis-ci.org/HydrefLab/jedi-faker)

## Installation

```sh
composer require hydreflab/jedi-faker`
```

## Basic usage

You can use data provided by this package in two ways:
- use `HydrefLab\JediFaker\Factory`,
- or manually add providers to `Faker\Factory`.

```php
// use provided factory to create generator with already registered providers
$faker = HydrefLab\JediFaker\Factory::create();

// or use Faker factory and manually register new providers
$faker = Faker\Factory::create();
$faker->addProvider(new HydrefLab\JediFaker\Provider\Character($faker));
... // add other providers

$faker->darkSide;            // Darth Vader
$faker->quote;               // No. I am your father.
$faker->quote('han_solo');   // Never tell me the odds!
$faker->droid;               // R2-D2
$faker->episode;             // Episode VIII: The Last Jedi
...
```

## Providers

Each of the providers contains one or more formatters. Right now, only default locale (en_US) is supported.

### `HydrefLab\JediFaker\Provider\Character`
```
$faker->lightSide;      // Yoda
$faker->darkSide;       // Kylo Ren
$faker->character;      // Han Solo
$faker->quote;          // Now, young Skywalker, you will die.
$faker->quote('leia');  // Aren't you a little short for a storm trooper?
```
To get a list of available characters' quotes, please check the provider file.

### `HydrefLab\JediFaker\Provider\Droid`
```
$faker->droid;  // C-3PO
```

### `HydrefLab\JediFaker\Provider\Movie`
```
$faker->episode;                // Episode V: The Empire Strikes Back
$faker->episode(2);             // Episode II: Attack of the Clones
$faker->episodeOpeningCrawl;    // Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to settle the conflict....
$faker->episodeOpeningCrawl(4); // It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire's\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire's\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....
```

### `HydrefLab\JediFaker\Provider\Planet`
```
$faker->planet;     // Tatooine
```

### `HydrefLab\JediFaker\Provider\Species`
```
$faker->species;    // Wookiee
```

### `HydrefLab\JediFaker\Provider\Vehicle`
```
$faker->vehicle;    // Millennium Falcon
```

### `HydrefLab\JediFaker\Provider\Squadron`
```
$faker->squadron;       // Green
$faker->squadronName;   // Blue Squadron
$faker->pilot;          // Red Leader or Blue #7
$faker->pilotRank;      // Pilot
```

## Contributing

Contributions are welcome! Please, read [CONTRIBUTING][] for details.

## Copyright and license

Package is licensed for use under the MIT License (MIT). Please, see [LICENSE][] for more information.

[contributing]: https://github.com/hydreflab/jedi-faker/blob/master/CONTRIBUTING.md
[license]: https://github.com/hydreflab/jedi-faker/blob/master/LICENSE
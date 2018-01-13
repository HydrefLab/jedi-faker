<?php

namespace HydrefLab\JediFaker;

use Faker\Factory as FakerFactory;
use Faker\Generator;

class Factory extends FakerFactory
{
    /**
     * @var array
     */
    protected static $jediProviders = [
        'Character', 'Droid', 'Movie', 'Planet', 'Species', 'Vehicle',
    ];

    /**
     * @param string $locale
     * @return Generator
     */
    public static function create(string $locale = self::DEFAULT_LOCALE): Generator
    {
        $generator = parent::create($locale);

        foreach (static::$jediProviders as $provider) {
            $providerClass = self::getProviderClass($provider, $locale);
            $generator->addProvider(new $providerClass($generator));
        }

        return $generator;
    }

    /**
     * @param string $provider
     * @param string $locale
     * @return string
     * @throws \InvalidArgumentException
     */
    protected static function getProviderClass(string $provider, string $locale): string
    {
        $providerClass = ($locale && self::DEFAULT_LOCALE !== $locale)
            ? sprintf('HydrefLab\JediFaker\Provider\%s\%s', $locale, $provider)
            : sprintf('HydrefLab\JediFaker\Provider\%s', $provider);

        if (true === class_exists($providerClass, true)) {
            return $providerClass;
        }

        throw new \InvalidArgumentException(sprintf('Unable to find provider "%s" with locale "%s"', $provider, $locale));
    }
}

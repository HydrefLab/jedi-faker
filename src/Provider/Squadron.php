<?php

namespace HydrefLab\JediFaker\Provider;

use Faker\Provider\Base;

class Squadron extends Base
{
    /**
     * @var array
     */
    protected static $pilotFormat = [
        '{{squadron}} {{pilotRank}}'
    ];

    /**
     * @var string
     */
    protected static $squadronWord = 'Squadron';

    /**
     * @var array
     */
    protected static $squadron = [
        'Black', 'Blade', 'Blue',
        'Cobalt', 'Corona', 'Cyan',
        'Danger', 'Dust',
        'Exeter',
        'Gray', 'Green', 'Gold',
        'Havoc',
        'Nomad',
        'Phoenix',
        'Rascal', 'Red', 'Rogue',
        'Scavenger', 'Stealth',
        'Wolf',
        'Yellow',
    ];

    /**
     * @var array
     */
    protected static $pilotRank = [
        'Leader', 'Pilot', 'Pilot', 'Pilot', 'Pilot', 'Pilot', 'Pilot', 'Pilot', 'Pilot', 'Pilot',
    ];

    /**
     * @return string
     */
    public function squadron(): string
    {
        return $this->generator->parse(static::randomElement(static::$squadron));
    }

    /**
     * @return string
     */
    public function squadronName(): string
    {
        return $this->generator->parse(static::randomElement(static::squadronFormat()));
    }

    /**
     * @return string
     */
    public function pilot(): string
    {
        $pilot = $this->generator->parse(static::randomElement(static::$pilotFormat));

        return false !== strpos($pilot, 'Pilot')
            ? str_replace('Pilot', '#' . static::numberBetween(1, 12), $pilot)
            : $pilot;
    }

    /**
     * @return string
     */
    public function pilotRank(): string
    {
        return $this->generator->parse(static::randomElement(static::$pilotRank));
    }

    /**
     * @return array
     */
    protected static function squadronFormat(): array
    {
        return ['{{squadron}} ' . static::$squadronWord];
    }
}

<?php

namespace HydrefLab\JediFaker\Provider;

use Faker\Provider\Base;

class Squadron extends Base
{
    /**
     * @var array
     */
    protected static $pilotFormat = [
        '{{squadron}} {{rank}}'
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
    protected static $rank = [
        'Leader', 'Pilot',
    ];

    /**
     * @return string
     */
    public function pilot(): string
    {
        // Replace generated 'Pilot' word with '~#' in order to use numerify function,
        // then replace '~' with '#' to have results such as 'Gold #7'.

        $pilot = str_replace('Pilot', '~#', $this->generator->parse(static::randomElement(static::$pilotFormat)));

        return str_replace('~', '#', static::numerify($pilot));
    }

    /**
     * @return string
     */
    public function squadron(): string
    {
        return sprintf(
            '%s %s',
            $this->generator->parse(static::randomElement(static::$squadron)),
            static::$squadronWord
        );
    }

    /**
     * @return string
     */
    public function rank(): string
    {
        return $this->generator->parse(static::randomElement(static::$rank));
    }
}

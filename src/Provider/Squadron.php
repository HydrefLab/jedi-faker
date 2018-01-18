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
     * @var array
     */
    protected static $squadron = [
        'Blue',
        'Green', 'Gold',
        'Red',
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
        return $this->generator->parse(static::randomElement(static::$squadron));
    }

    /**
     * @return string
     */
    public function rank(): string
    {
        return $this->generator->parse(static::randomElement(static::$rank));
    }
}

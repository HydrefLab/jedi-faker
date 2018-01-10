<?php

namespace HydrefLab\JediFaker\Provider\en_US;

use Faker\Provider\Base;

class Droid extends Base
{
    /**
     * @var array
     */
    protected static $droids = [
        '2-1B', '4-LOM', '8D8',
        'BB-8',
        'C-3PO',
        'EV-9D9',
        'FA-4',
        'IG-88',
        'R2-D2', 'R2-Q5', 'R5-D4',
        'TC-14',
    ];

    /**
     * @return string
     */
    public function droid(): string
    {
        return $this->generator->parse(static::randomElement(static::$droids));
    }
}
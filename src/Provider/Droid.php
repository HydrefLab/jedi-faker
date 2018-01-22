<?php

namespace HydrefLab\JediFaker\Provider;

use Faker\Provider\Base;

class Droid extends Base
{
    /**
     * @var array
     */
    protected static $droids = [
        '2-1B', '4-LOM', '8D8',
        'BB-8', 'B-U4D',
        'C-3PO',
        'EGL-21', 'EV-9D9',
        'FA-4',
        'GA-97',
        'HURID-327',
        'IGG-88',
        'ME-8D9',
        'PZ-4CO',
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
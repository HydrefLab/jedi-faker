<?php

namespace HydrefLab\JediFaker\Provider\en_US;

use Faker\Provider\Base;

class Droid extends Base
{
    /**
     * @var array
     */
    protected static $droids = [
        '2-1B', '4-LOM', 'R5-D4', 'IG-88', 'EV-9D9', 'C-3PO', 'BB-8', 'R2-D2', 'FA-4', 'TC-14', '8D8', 'R2-Q5',
    ];

    /**
     * @return string
     */
    public function droid(): string
    {
        return $this->generator->parse(static::randomElement(static::$droids));
    }
}
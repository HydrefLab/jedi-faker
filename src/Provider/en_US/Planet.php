<?php

namespace HydrefLab\JediFaker\Provider\en_US;

use Faker\Provider\Base;

class Planet extends Base
{
    /**
     * @var array
     */
    protected static $planets = [
        'Ahch-To', 'Alderaan',
        'Bespin',
        'Cantonica', 'Cato Neimoidia', 'Coruscant',
        'D\'Qar', 'Dagobah',
        'Endor',
        'Felucia',
        'Geonosis',
        'Hosnian Prime', 'Hoth', '
        Jakku',
        'Kamino', 'Kashyyyk',
        'Mustafar', 'Mygeeto',
        'Naboo',
        'Polis Massa',
        'Starkiller Base',
        'Takodana', 'Tatooine',
        'Utapau',
        'Yavin 4',
    ];

    /**
     * @return string
     */
    public function planet(): string
    {
        return $this->generator->parse(static::randomElement(static::$planets));
    }
}
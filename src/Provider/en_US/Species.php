<?php

namespace HydrefLab\JediFaker\Provider\en_US;

use Faker\Provider\Base;

class Species extends Base
{
    /**
     * @var array
     */
    protected static $species = [
        'Aiwha', 'Aleena', 'Amani', 'Balosar', 'Besalisk', 'Bith', 'Cerean', 'Chandra-Fan', 'Chagrian', 'Dactillion',
        'Dathomirian', 'Devaronian', 'Dug', 'Duros', 'Ewok', 'Falumpaset', 'Gamorreans', 'Geonosian', 'Givin', 'Gotal',
        'Gran', 'Gungan', 'Hutt', 'Ithorians', 'Jawa', 'Kaadu', 'Kallidahin', 'Kaminoan', 'Klatooinian', 'Kubaz',
        'Luggabeast', 'Mirialan', 'Mon Calamari', 'Nautolan', 'Neimoidian', 'Nikto', 'Pantoran', 'Pau\'an', 'Quarren',
        'Rodian', 'Saurin', 'Sullustan', 'Talz', 'Togruta', 'Toydarian', 'Trandoshan', 'Twi\'lek', 'Ugnaught', 'Utai',
        'Weequay', 'Wookiee',
    ];

    /**
     * @return string
     */
    public function species(): string
    {
        return $this->generator->parse(static::randomElement(static::$species));
    }
}
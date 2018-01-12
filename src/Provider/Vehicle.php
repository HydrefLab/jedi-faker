<?php

namespace HydrefLab\JediFaker\Provider;

use Faker\Provider\Base;

class Vehicle extends Base
{
    /**
     * @var array
     */
    protected static $vehicles = [
        'A-Wing Fighter', 'AA-9 Coruscant Freighter', 'AAT Battle Tank', 'Alderaan Cruiser', 'ARC-170 Starfighter',
        'AT-AT walker', 'AT-M6 Walker', 'AT-RT Walker', 'AT-ST Walker', 'AT-TE Walker',
        'B-Wing Fighter', 'BARC Speeder', 'Black One',
        'Cloud Car',
        'Delta-7 Jedi Starfighter', 'Desert Skiff',
        'Eta-2 Jedi Starfighter', 'Executor',
        'Flitknot Speeder', 'Finalizer', 'First Order Special Forces TIE Fighter', 'First Order TIE Fighter',
        'First Order Transporter', 'Flash Speeder',
        'Geonosian Fighter', 'Gian Speeder', 'GR-75 Medium Transport', 'Gungan Bongo Submarine',
        'H-Type Nubian Yacht', 'Home One',
        'Imperial Shuttle', 'Imperial Star Destroyer',
        'Meson Martinet', 'Millennium Falcon', 'Mon Calamari Star Cruiser', 'MTT',
        'Naboo N-1 Starfighter', 'Naboo Royal Cruiser', 'Naboo Royal Starship', 'Nebulon-B Frigate',
        'Neimoidian Escort Shuttle',
        'Podracer',
        'Quadjumper',
        'Republic Attack Cruiser', 'Republic Attack Gunship', 'Republic Cruiser', 'Resistance Bomber',
        'Resistance Ski Speeder', 'Resistance Transport', 'Resistance X-Wing',
        'Sandcrawler', 'Sith Infiltrator', 'Sith Speeder', 'Slave I', 'Snowspeeder', 'Solar Sailer', 'Soulless One',
        'Speeder Bike', 'STAP', 'Super Star Destroyer', 'Swoop',
        'T-16 Skyhopper', 'Tantive IV', 'Taylander Shuttle', 'The Eravana', 'The Fulminatrix', 'The Libertine',
        'The Supremacy', 'TIE Fighter',  'TIE Bomber', 'TIE Defender', 'TIE Defender Elite', 'TIE Fighter',
        'TIE Interceptor', 'TIE Silencer', 'Trade Federation Battleship', 'Trade Federation Landing Ship',
        'TSMEU-6 Wheel Bike',
        'V-Wing Fighter',
        'Wookie Catamaran',
        'X-34 Landspeeder', 'X-Wing Starfighter', 'XJ-6 Airspeeder',
        'Y-Wing Starfighter',
    ];

    /**
     * @return string
     */
    public function vehicle(): string
    {
        return $this->generator->parse(static::randomElement(static::$vehicles));
    }
}
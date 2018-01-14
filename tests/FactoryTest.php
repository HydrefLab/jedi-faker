<?php

namespace HydrefLab\JediFaker\Test;

use Faker\Generator;
use HydrefLab\JediFaker\Factory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testFactoryReturnsFakerGenerator()
    {
        $faker = Factory::create();
        $this->assertInstanceOf(Generator::class, $faker);
    }
}

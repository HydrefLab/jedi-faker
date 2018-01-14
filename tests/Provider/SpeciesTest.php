<?php

namespace HydrefLab\JediFaker\Test;

use HydrefLab\JediFaker\Factory;
use PHPUnit\Framework\TestCase;

class SpeciesTest extends TestCase
{
    public function testDroidIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->species);
    }
}

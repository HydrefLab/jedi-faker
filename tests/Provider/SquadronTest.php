<?php

namespace HydrefLab\JediFaker\Test;

use HydrefLab\JediFaker\Factory;
use PHPUnit\Framework\TestCase;

class SquadronTest extends TestCase
{
    public function testSquadronIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->squadron);
    }

    public function testPilotIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->pilot);
    }

    public function testRankIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->rank);
    }
}

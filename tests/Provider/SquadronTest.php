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

    public function testSquadronNameContainsSquadronWord()
    {
        $faker = Factory::create();
        $this->assertContains('Squadron', $faker->squadronName);
    }

    public function testSquadronDoesNotContainSquadronWord()
    {
        $faker = Factory::create();
        $this->assertNotContains('Squadron', $faker->squadron);
    }

    public function testPilotIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->pilot);
    }

    public function testRankIsNotNull()
    {
        $faker = Factory::create();
        $this->assertNotNull($faker->pilotRank);
    }
}
